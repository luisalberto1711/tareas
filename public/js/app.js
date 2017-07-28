////codigo javascript
var app=angular.module('appmusica',['ui.router']);
//$scope= relaciona la capa de vista y el controlador
//        para uso de variables y funciones (controlador=>vista) 
//$http= para hacer llamadas asincronas al servidor(ajax)
app.controller('pruebaController',function($scope,$http,$state){

    $scope.musica={};
    $scope.onclickEnviar=function(){
            console.info("estructura de musica",$scope.musica);
            $http.post( ($scope.editar==false?'/musica/ApiCrear':'/musica/ApiEditar'),$scope.musica).then(function(server){
                if(server.data.estado==1){
                    cargar();
                    $state.go('button');
                }
            });
            $scope.editar=false;   
            $('#myModal').modal('hide');    
            $scope.musica={};
    }
    $scope.var1='hola mundo';    //param   //1.- direccion url del serve    //2.- datos    //console.log('aqui');
    function cargar(){
        $http.get('/musica/ApiLista').then((server)=>{
            //el parametro server, es lo que el servidor devolvio
            //visualiza en la consola del navegador la variable server
            console.log(server);
            //en server.data se encuentra los datos que fuen mandado desde 
            //el servidos al cliente
            console.log(server.data);
            $scope.lista=server.data;
        });
    }
    cargar();
    $scope.editar=false;
    $scope.onclickeditar=function(item){
        $http.get('/musica/'+item.id+'/ApiGetMusica').then(function(server){
            $scope.musica=server.data;
            $scope.editar=true;
        });
    }
    $scope.onclickBorrar=function(id){
        if(confirm('estas seguro de borra')){
            ///url /musica/2/ApiBorrar
            $http.delete('/musica/'+id+'/ApiBorrar').then(server=>{
                if(server.data.estado==1)
                    cargar();
            });
        }
        else{

        }
    }

});

app.config(function($stateProvider){
    $stateProvider
    .state('nuevoMusica',{
        views:{
            'contenido':{
                templateUrl:'/musica/crear1',
            }
        }
    })
    .state('button',{
        views:{
            'contenido':{
                template:'<button  class="btn btn-succes" ui-sref="nuevoMusica" >nuevo</button>',
            }
        }
    });
});