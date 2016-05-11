@extends('layouts.app')
@if (Auth::user()->Tip=='Admin')
@section('content')

<div class="col-md-6 col-md-offset-3">
 <h2>Add book

 </h2>
 <br> <form class="form-horizontal" role="form" ng-submit="submitComment()" > <!-- ng-submit will disable the default form action and use our function -->
  
        <!-- AUTHOR -->
        <div class="form-group">
        <label class="col-md-2 control-label">Name</label>
            <div class="col-md-9">
             <input type="text" class="form-control input-sm" name="naslov" ng-model="commentData.Naslov" placeholder="Don Quixote">
              </div>
        </div>
 


<div class="form-group">
        <label class="col-md-2 control-label">Author</label>
            <div class="col-md-9">
            <input type="text" class="form-control input-sm" name="autor" ng-model="commentData.Autor" placeholder="Miguel de Cervantes">
        </div>
   </div>
  

        <div class="form-group">
        <label class="col-md-2 control-label">Publisher</label>
            <div class="col-md-9">
            <input type="text" class="form-control input-sm" name="izdavac" ng-model="commentData.Izdavac" placeholder="Francisco de Robles">
        </div>
   </div>


        <div class="form-group">
         <label class="col-md-2 control-label">Genre</label>
            <div class="col-md-9">
            <input type="text" class="form-control input-sm" name="kategorija" ng-model="commentData.Kategorija" placeholder="Burlesque">
        </div>
</div>


        <div class="form-group">
         <label class="col-md-2 control-label">ISBN</label>
            <div class="col-md-9">
            <input type="text" class="form-control input-sm" name="isbn" ng-model="commentData.ISBN" placeholder="9788433108302">
        </div>

</div>




 <div class="form-group">
   <label class="col-md-2 control-label">Price</label>
            <div class="col-md-9">
            <input type="number" class="form-control input-sm" name="cijena" ng-model="commentData.Cijena" placeholder="14.99$">
        </div>
 </div>


         <div class="form-group">
          <label class="col-md-2 control-label">Number of pages</label>
            <div class="col-md-9">
            <input type="number" class="form-control input-sm" name="brojstrana" ng-model="commentData.BrojStrana" placeholder="982">
        </div>
</div>


         <div class="form-group">
          <label class="col-md-2 control-label">Author ID</label>
            <div class="col-md-9">
            <input type="number" class="form-control input-sm" name="autorid" ng-model="commentData.autorid" placeholder="autorid">
        </div>
</div>


<div class="form-group">
  <label class="col-md-2 control-label">Publication date</label>
            <div class="col-md-9">
            <input type="text" class="form-control input-sm" name="datum" ng-model="commentData.Datum" placeholder="1605">
        </div>
      </div>  


<div class="form-group">
  <label class="col-md-2 control-label">Picture URL</label>
            <div class="col-md-9">
            <input type="text" class="form-control input-sm" name="slika" ng-model="commentData.Slika" placeholder="http://prodimage.images-bn.com/pimages/9781593080464_p0_v4_s192x300.jpg">
        </div>
      </div>    

        <div class="form-group">
        <label class="col-md-2 control-label">About</label>
            <div class="col-md-9">
            <input type="text" class="form-control input-sm" name="opis" ng-model="commentData.Opis" placeholder="Cervantes said the first chapters were taken from The Archive of La Manc">
        </div>
</div>
 
       
    
        <!-- SUBMIT BUTTON -->
        <div class="form-group text-right">  
           <div class="col-md-11"> 
            <button type="submit" class="btn btn-primary btn-lg">  Add  </button>
        </div>
             </div>
    </form>
      </div>     </div>
@endsection
@endif