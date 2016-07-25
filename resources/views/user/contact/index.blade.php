@extends('user.partials.layout')

@section('content')
<div id="main">
    <section id="contact" class="four">
        <div class="container">

            <header>
                <h2>My contact list</h2>
                <a href="{{action('User\ContactController@get_create')}}">New Contact</a>
            </header>

            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>SL</th>
                     <th>Name</th>
                     <th>Action</th>
                 </tr>
             </thead>
         </table>

     </div>
 </section>
</div>

@stop