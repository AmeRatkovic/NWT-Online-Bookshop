@extends('layouts.app')
@section('content')

@if (!Auth::guest())

<div class="knjiga" ng-hide="loading" ng-repeat="knjiga in knjigas">

<table border="0" cellpadding="0" cellspacing="0">

                
                

                <td >
                
                    <table border="0" cellpadding="0" cellspacing="0" align="center">
                        <tr>
                            <td>
                                
                                <table border="0" cellpadding="0" cellspacing="0" style=" width: 800px;">
                                   
                                        <td width="400" height="222">
                                            <table border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td rowspan="6" width="197" align="center"><img src=" @{{ knjiga.Slika }} " width="202" height="200" border="0" alt="">
                                                    </td>
                                                    <td width="590">
                                                    <div > <h3>#@{{ knjiga.idKnjiga }}  @{{ knjiga.Naslov }} </h3></div>
<div ><h5>Genre: @{{ knjiga.Kategorija }}  </h5> </div>
 <div ><h5>Publisher: @{{ knjiga.Izdavac }}</h5></div>
 <div ><h5>Number of pages: @{{ knjiga.BrojStrana }}</h5></div>
                                                    </td>

                                                </tr>


                                                <tr>
                                                <td width="90" height="45" align="left"><div class="item_price"><h3>Price: @{{ knjiga.Cijena }} KM</h3></div>

                                                </td>

 <td width="90" height="45" align="left">  


 <p><a href="#" ng-click="deleteComment(knjiga.idKnjiga)" class="text-muted"><h3> Delete </h3></a>
 </p>

 </td>
 
                                                </tr>

                                                <tr>
                                                <td width="90" align="center">

                                                </td>
                                                </tr>
                                            </table>
                                        </td>
                                        
                                    </tr>
                                   
                                </table>
                                
                            </td>

                           <td>
                         </tr>   
                    </table>
                </td></tr>
    
            </table>
        </td>
    
   
                
              
   
</table>
</div>

@else

<div class="knjiga" ng-hide="loading" ng-repeat="knjiga in knjigas">

<table border="0" cellpadding="0" cellspacing="0">

                
                

                <td >
                
                    <table border="0" cellpadding="0" cellspacing="0" align="center">
                        <tr>
                            <td>
                                
                                <table border="0" cellpadding="0" cellspacing="0" style=" width: 800px;">
                                   
                                        <td width="400" height="222">
                                            <table border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td rowspan="6" width="197" align="center" style="
  
    padding-right: 20px;
"><img src=" @{{ knjiga.Slika }} " width="202" height="200" border="0" alt="">
                                                    </td>
                                                    <td width="590">
                                                    <div > <h3>#@{{ knjiga.idKnjiga }}  @{{ knjiga.Naslov }} </h3></div>
<div ><h5>Genre: @{{ knjiga.Kategorija }}  </h5> </div>
 <div ><h5>Publisher: @{{ knjiga.Izdavac }}</h5></div>
 <div ><h5>Number of pages: @{{ knjiga.BrojStrana }}</h5></div>
                                                    </td>

                                                </tr>


                                                <tr>
                                                <td width="90" height="45" align="left"><div class="item_price"><h3>Price: @{{ knjiga.Cijena }} KM</h3></div>

                                                </td>


 
                                                </tr>

                                                <tr>
                                                <td width="90" align="center">

                                                </td>
                                                </tr>
                                            </table>
                                        </td>
                                        
                                    </tr>
                                   
                                </table>
                                
                            </td>

                           <td>
                         </tr>   
                    </table>
                </td></tr>
    
            </table>
        </td>
    
   
                
              
   
</table>
</div>


@endif
@endsection
