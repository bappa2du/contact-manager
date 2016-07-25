@extends('user.partials.layout')

@section('content')
<div id="main">
    <section id="contact" class="four">
        <div class="container">

            <header>
                <h2>New contact</h2>
            </header>

            <form action="">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" name="first_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" name="last_name" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit">Save</button>
                </div>
            </form>

     </div>
 </section>
</div>

@stop