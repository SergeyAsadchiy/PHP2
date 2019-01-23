<?php
/**
 * 
 */
class HomeController extends Controller
{
    public function index() {
        $model  = new ItemModel;
        $items  = $model->getDataItems();
        $itemsCopy  = $model->getDataItems();
        $noImage= getNoImage();                 // из config.php 

        $items = $this->filterIdItem($items);   // оставляет в массиве только отфильтрованный по id товар----//
                                                // и записывает этот id в $_SESSION['recentItems'] (просмотренные товары)
        $cookiesOK = $this->userConfirmCookies();

        $data = [
            'items' => $items,
            'last3Items' => $this->recentViewedItems($itemsCopy),
            //'cookiesOK' => $this->userConfirmCookies()
            'cookiesOK' => $cookiesOK
        ];

        $this->view('home',$data);
    }

    //---- добавляет в новый массив  3 недавно просмотренных товара (без дублирования)----//
    protected function recentViewedItems($items) {

        if (isset($_SESSION['recentItems'])) {
            $_SESSION['recentItems'] = array_unique($_SESSION['recentItems']);     // убираем дублирование
            $_SESSION['recentItems'] = array_slice ($_SESSION['recentItems'],0,3); // оcтавляем 3 элемента 

            foreach ($_SESSION['recentItems'] as $value) {
                foreach ($items as $item) {
                    if ($item->id == $value) { $recentViewedItems[] = $item;}
                }
            }
        }
        else $recentViewedItems = array();

    return $recentViewedItems;    
    }
    
    // ---- выводит форму подтверждения cookies ----//
    // ! - работает только если вызывается до 'templates/home.php'
    protected function userConfirmCookies() {

        $ucc = 'userConfirmCookies'; // чтобы легче читался код

        if (isset($_POST[$ucc]) AND $_POST[$ucc] == 'on') {
            setcookie($ucc, 'YES');
            header('Location: index.php'); // редирект на GET
            exit;
        }

        if (!isset($_COOKIE[$ucc]) OR $_COOKIE[$ucc] != 'YES')
            $cookiesOK = False;
        else 
            $cookiesOK = True;    
        return $cookiesOK;
    }
    
    //---- оставляет в массиве только отфильтрованный товар ----//
    protected function filterIdItem($items) {

                // ---- проверяет равны ли id товара и id, переданный в $_GET ---- //
                //      и записывает это id в начало $_SESSION['recentItems']
                // вызывается в function filterIdItem()
                function equal_Id_Item_GET($items) {
                    $result = false;
                    
                    if (!isset($_SESSION['recentItems'])) {
                       $_SESSION['recentItems'] = array();          
                    }

                    if ($items->id == $_GET['id']) {
                        $result = True;
                        array_unshift($_SESSION['recentItems'], $items->id);    
                    }
                    return $result;
                } 

        if (array_key_exists('id', $_GET)){                            // если $_GET содержит ключ 'id'
           $filteredItems  = array_filter($items, "equal_Id_Item_GET");// то оставляем в массиве только товар
        }                                                              // у которого 'id' совпадает с переданными в $_GET
        else $filteredItems = $items;

        return $filteredItems;
    }
    
   
    
    // ---- подставляет изображение товара либо NoImage ---- //
    public function getImage($f_images,$f_item,$f_NoImage){   
        $f_OutImage = $f_NoImage;
        foreach ($f_images as $f_image) {
            if ($f_item['id'] == $f_image['id']) {
                $f_OutImage = $f_image['img'];
                break;                 
            }
        }
        return($f_OutImage);    
    }
    
}




/*
 //---- оставляет в массиве только отфильтрованный товар ----//
    public function filterIdItem($items) {
       if (array_key_exists('id', $_GET)){                              // если $_GET содержит ключ 'id'
           $filteredItems  = array_filter($items, "$this->equal_Id_Item_GET"); // то оставляем в массиве только товар
       }                                                                // у которого 'id' совпадает с переданными в $_GET
       return $filteredItems;                                              
    }
    
    // ---- проверяет равны ли id товара и id, переданный в $_GET ---- //
    //      и записывает это id в начало $_SESSION['recentItems']
    // вызывается в function filterIdItem()
    public function equal_Id_Item_GET($array) {
        $result = false;
        if ($array->id == $_GET['id']) {
            $result = True;
    
            if (!isset($_SESSION['recentItems'])) {
                $_SESSION['recentItems'] = array();          
            }
            array_unshift($_SESSION['recentItems'], $array->id);    
        }
        return $result;
    }  
    */