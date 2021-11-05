<?php  
$hw = 'Домашняя работа';
$imgSrc = 'img/php.jpg';
$intro = 'Меня зовут';
$prog = 85;
$progress = '
  <div class="progress">
      <div class="determinate" style="width:'. $prog .'%"></div>
  </div>
'
?>


<div class="row">
  <h2 class="center">
    <?php
      echo $hw;
    ?>
  </h2>
  <div class="col m6 s12">

    <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="
        <?php  
        echo $imgSrc;
        ?>
        ">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">
          <?php 
          echo $intro;
          ?>
          <p>
            <?php echo $name, 
            ' ', 
            $surname . 
            '<br>';
            echo 'город', 
            ' ', 
            $city; 
            ?>
          </p>
          <i class="material-icons right">more_vert</i>
        </span>
        <p><a href="https://github.com/skripkalisa">@GitHub</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4 flow-text">
          Достижения
          <i class="material-icons right">close</i>
        </span>
        <p class="flow-text">
          Мне
          <?php  echo $age. " ";  
            switch ($age%10){
              case 1: 
                echo 'год';
                break;
              case 2:
              case 3: 
              case 4: 
                echo 'года';
                break;
              default: 
                echo 'лет';    
            }
          ?>
        </p>
        <p class="flow-text">
          Мы научились создавать переменные
        </p>
        <p class="flow-text">
          Изучили простые операции с ними
        </p>
      </div>
    </div>
  </div>

  <div class="col m6 s12">

    <div class="card">
      <div class="card-content">
        <p class="flow-text">
          Здесь можно увидеть вывод значение переменных.
        <ol class="flow-text">
          <li>Знания</li>
          <li>Сумма чисел</li>
          <li>Вывод по условию</li>
        </ol>
        </p>
      </div>
      <div class="card-tabs">
        <ul class="tabs tabs-fixed-width" class="flow-text">
          <li class="tab"><a href="#tab1">Вывод 1</a></li>
          <li class="tab"><a class="active" href="#tab2">Вывод 2</a></li>
          <li class="tab"><a href="#tab3">Вывод 3</a></li>
        </ul>
      </div>
      <div class="card-content grey lighten-4">
        <div id="tab1">
          <?php
            include 'knowledge.inc.php'; 
            echo $progress;
          ?>
          <?php
            echo $a, ' ', $b, ' ', $c; 
          ?>
        </div>

        <div id="tab2">
          <?php
            $a = 10;
            $b = 20;
            $c = $a + $b;
            echo 'Сумма: '.$a.' + '.$b.' = '.$c;
          ?>

        </div>
        <div id="tab3">
          <?php
            echo $d;
          ?>
        </div>
      </div>
    </div>
  </div>

</div>