<meta charset="utf-8"/>
<?php
 //Различие между одинарными и двойными кавычками обусловлено тем, насколько интенсивной интерпретации подвергаются в среде PHP символы, заключенные в кавычки, перед созданием самой строки. Если строка заключена в одинарные кавычки, то не выполняется почти никакая интерпретация, а если строка заключена в двойные кавычки, то в среде PHP осуществляется подстановка значений всех переменных, которые указаны в строке, а также выполняется замена некоторых специальных символьных последовательностей, которые начинаются с символа обратной косой черты (\).
  $count = 13;

  $string_1 = "В строке \"Hello, world\" $count символов.<br>";
  $string_2 = 'В строке \'Hello, world\'$count символов.<br>';

   echo $string_1;
   echo $string_2;
    //------------------------------------------------------------------------------
                             //Подстановка значений с использованием фигурных скобок
  

  $sport_1 = 'волей';
  $sport_2 = 'бескет';
         // Фигурные скобки говорят о том что нужно вычислить переменную.
  $play_1 = "Я люблю играть в ${sport_1}бол.<br>";  // Правильная конструкция.
  $play_2 = "Я люблю играть в $sport_2бол.<br>";    // НЕ правильная.

  echo $play_1;
  echo $play_2;
           //Общее правило состоит в том, что если за открывающей фигурной скобкой ({) непосредственно следует символ $, то интерпретатор PHP вычисляет значение выражения с именем переменной вплоть до закрывающей фигурной скобки (}), а затем подставляет результирующее значение в строку. (Если требуется, чтобы в строке появилось литеральное значение {$, это можно обеспечить, поставив перед каждым из этих символов обратную косую черту, \).
   

    //-------------------------------------------------------------------------------
                           //Символы и индексы символов в строках

    //В отличие от некоторых других языков программирования в языке PHP нет отдельного символьного типа, не совпадающего со строковым типом. Вообще говоря, функции, которые требуют в других языках применения символьных фактических параметров, в языке PHP рассчитаны на получение строк с длиной 1.

//Выборка отдельных символов из строки может осуществляться путем указания порядкового номера символа, начинающегося с нуля, который должен быть указан в фигурных скобках непосредственно за именем строковой переменной. Такие символы фактически представляют собой односимвольные строки. Например, выполнение следующего кода:



  $my_string = "Dubled";

  for ($index=0; $index < strlen($my_string); $index++) 
  { 
       $char = $my_string{$index};
       print("$char$char");
  }
  
     //----------------------------------------------------------------------------------------
                         //Операции со строками
      
      //В языке PHP предусмотрены две строковые операции: операция со знаком операции точка (.), или операция конкатенации, и операция со знаком операции точка и знак равенства (.=), или операция конкатенации и присваивания.
 

  $str_1 = "<br>"."Это часть";
  $str_2 = "строки";

   // Конкатенация строк
 echo $str_1." простой ".$str_2;
   // Конкатенация и присваивание
  $str_1 .= " простой ";
  $str_1 .= $str_2;
  echo $str_1;


?>