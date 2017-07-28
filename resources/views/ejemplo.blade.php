<html>
    <body>
        <h1>hola mundo</h1>
        {{$cantidad}}
        @foreach($LISTA as $item)
            <strong>{{$item['nombre']}}</strong>
            
        @endforeach
        <br>
        <?php
        /*foreach($LISTA as $item){
            ?>
            <strong><?=$item['nombre'];?></strong>
            
            <?php
        }*/
        ?>
        fin
    </body>
</html>