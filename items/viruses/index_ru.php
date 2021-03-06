<?php require("../../entete.php"); ?> <?php require("../../base.php"); ?> <?php require("../../fonctions.php"); ?>

<div id="corps">

<h2>Забудьте о вирусах.</h2>

<p>Если ваш компьютер выключается без спроса, если на экране
появляются окна с непонятными сообщениями и рекламой, о которой
вы никого не просили, если без вашего ведома по всей вашей адресной
книге рассылаются сообщения, то в таких случах есть все
основания полагать, что ваш компьютер подцепил вирус.
Главным образом, такое случается потому, что на компьютере
работает Windows.</p>

<p>Вирусов для Linux практически не существует. Я не имею в виду "Ну, они
редко встречаются в природе". Наоборот, я хочу сказать, что, если вы когда-либо
слышали о настоящем вирусе для Linux, то мне любопытно было бы об этом
узнать. Конечно, существует возможность встретить Linux-вирус.
Однако, Linux практически сводит эту возможность на нет, и вот тому 
причины:</p>

<ul>

<li>Большинство людей используют Microsoft Windows, злоумышленникам же необходимо
нанести как можно больший ущерб системе (или взять её под максимальный контроль);
поэтому их целью становится Windows. Но это не единственная причина;
веб-сервер Apache (веб-сервер - это программа, установленная на удалённом
компьютере, которая отправляет вашему браузеру веб-страницы, когда вы
их запрашиваете), являющийся программой с открытым исходным кодом,
используется на большем количестве серверов (по сравнению с сервером
Microsoft's IIS), но, в отличие от разработки Microsoft, в меньшей
степени представляет собой цель для атак или взломов.</li>

<li>Linux реализует развитую модель разделения прав. В среде Windows вы
(и любая программа, установленная вами) обычно располагаете более чем
избыточными правами. Если вдруг вы решите наказать компьютер за внезапное
исчезновение ценных файлов, вы сможете удалять что угодно внутри
системного каталога; Windows не будет ни на что жаловаться. Неприятности
начнутся при следующей перезагрузке. Теперь представьте, что как и вы,
любая программа сможет удалить или изменить эти системные файлы.
Linux такого не позволит. Каждый раз, когда вы производите какое-либо
действие, которое может затронуть систему, вам нужно указывать пароль
администратора (и если вы его не знаете, выполнить действие вам не
удастся). Вирусы не могут разгуливать где угодно или изменять
что-либо в системе - у них на это нет прав.</li>

<li>Больше глаз - меньше ошибок в безопасности. Linux - это программное обеспечение
с открытым кодом, что означает, что абсолютно любой программист
может получить код (любой программы) и оказать проекту помощь,
или просто задать другим разработчикам вопрос: "Эй, а что если бла-бла-бла,
разве это не дыра в безопасности?"</li>

</ul>

<img src="Images/viruses_thumb.png" />

</div>
</body>
</html>
