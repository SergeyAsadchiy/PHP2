<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<ul class="navbar-nav mr-auto">
		<li class="nav-item active">
			<a class="nav-link" href="http://easy-it-courses.com/sumy/it-courses/PhpJunior">EasyIT</a>
		</li>
		<li class="nav-item active">	
			<a class="nav-link" href="https://www.facebook.com/groups/189801585296608/?ref=bookmarks">Facebook:PHP</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GitHub</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          			<a class="dropdown-item" href="https://github.com/SergeyAsadchiy/PHP2">SergeyAsadchiy/PHP2</a>
          			<a class="dropdown-item" href="https://github.com/vovadoma/PHP">vovadoma/PHP</a>
          		</div>	
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BootStrap</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          			<a class="dropdown-item" href="https://getbootstrap.com/docs/4.1/components/card/">карточки</a>
          			<a class="dropdown-item" href="https://getbootstrap.com/docs/4.1/layout/grid/?fbclid=IwAR2FwsEGj6emC3MI01B05uVQKXFINLLRAI6aJzDOwPnsD0_c0dlBO3yt0Co">сетка</a>
          			<a class="dropdown-item" href="https://getbootstrap.com/docs/4.1/components/navbar/">navbar</a>
          		</div>	
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PHP</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          			<a class="dropdown-item" href="http://php.net/manual/ru/langref.php">php.net</a>
          			<a class="dropdown-item" href="http://www.php.su/">php.su</a>
          		</div>	
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">вопросы на среду</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          			<a class="dropdown-item" href="#">Как лучше совмещать PHP код и HTML в одном файле (как код для вывода карточек или таблицы)?</a>
          			<a class="dropdown-item" href="#">Можно ли часть HTML кода писать в другом файле. (Например - это меню, в нем совсем нет PHP кода)</a>
          			<a class="dropdown-item" href="#">Можно ли запускать приложение Windows из браузера?</a>
          		</div>	
		</li>	
	</ul>
</nav>


<?php



$items = [
    ['id' => '1', 'name' => 'Монитор',      'price' => '1200.00', 'stock' => '5', 'disc' => '10'],
    ['id' => '2', 'name' => 'Компьютер',    'price' => '4200.00', 'stock' => '7', 'disc' => '10'],
    ['id' => '3', 'name' => 'Ноутбук',      'price' => '7700.00', 'stock' => '2', 'disc' => '10'],
    ['id' => '4', 'name' => 'Принтер',      'price' => '1800.00', 'stock' => '1', 'disc' => '10'],
    ['id' => '5', 'name' => 'Стол',         'price' => '1100.00', 'stock' => '0', 'disc' => '20'],
    ['id' => '6', 'name' => 'Стул',         'price' => '2200.00', 'stock' => '0', 'disc' => '20'],
    ['id' => '7', 'name' => 'Шкаф',         'price' => '1260.00', 'stock' => '8', 'disc' => '20'],
    ['id' => '8', 'name' => 'Кресло',       'price' => '4250.00', 'stock' => '9', 'disc' => '20'],
    ['id' => '9', 'name' => 'Диван',        'price' => '9800.00', 'stock' => '1', 'disc' => '30'],
];

$noImage = 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/600px-No_image_available.svg.png';

$images = [
    ['id' => '1', 'img' => 'https://24shop.by/images/cache/286/_thumb_180x180xtrim_upload_iblock_286_28645e4ca35135ed3d2b29cf1b4a62bc.jpeg'],
    ['id' => '2', 'img' => 'https://supercomp.kiev.ua/img/item_foto/bbb/08/U0106900.jpg'],
    ['id' => '3', 'img' => 'img/notebook.jpg'],
    ['id' => '4', 'img' => 'img/printer.jpg'],
    ['id' => '7', 'img' => 'img/wardrobe.jpg'],
    ['id' => '8', 'img' => 'img/armchair.jpg']
];

$description = "Some quick example text to build on the card title and make up the bulk of the card's content.";
echo '
<div class="container">
    <div class="row">
' ;          
foreach ($items as $item) {
	$item['priceDisc']=getPrice($item);
	$item['img']=getImage($images,$item,$noImage);  
	include 'template/card.php';
}
echo'
    </div>
</div> 
' ;
// 5) Вывести все поля товаров в виде таблицы
echo '
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Discount</th>
    </tr>
    </thead>
    <tbody>
';
echo '<br>';
foreach ($items as $item) {
    echo'
    <tr>
        <th>'.$item['id'].'</th>
        <td>'.$item['name'].'</td>
        <td>'.$item['price'].'</td>
        <td>'.$item['stock'].'</td>
        <td>'.$item['disc'].'</td>
    </tr>
    ';
}
echo '
    </tbody>
</table>
';

//-------------------------------------------------------------------
function getPrice($itemPrice)
{	
    if ($itemPrice['stock']==0) {
        $outPrice='нет в наличии';
    } else {
        if ($itemPrice['stock']<2) {
            $outPrice=$itemPrice['price'];
        } else {
            $outPrice=$itemPrice['price']*(1-$itemPrice['disc']/100);
        }
	}
	return($outPrice);
}

function getImage($f_images,$f_item,$f_NoImage)
{	
	$f_OutImage=$f_NoImage;
	foreach ($f_images as $f_image) {
        if ($f_item['id']==$f_image['id']) {
            $f_OutImage=$f_image['img'];
            break;                 
        }
    }
	return($f_OutImage);	
}

