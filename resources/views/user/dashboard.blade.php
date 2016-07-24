@extends('user.partials.layout')

@section('content')
<div id="main">

                <!-- Intro -->
                    <section id="top" class="one dark cover">
                        <div class="container">

                            <header>
                                <h2 class="alt">Hi! I'm a <strong>Contact Manager</strong> for you<br />
                                with addtional features.</h2>
                                <p>Manage/Organize your contacts efficiently.</p>
                            </header>

                           

                        </div>
                    </section>

                

                

                <!-- Contact -->
                    <section id="contact" class="four">
                        <div class="container">

                            <header>
                                <h2>Contact</h2>
                            </header>

                            <p>Elementum sem parturient nulla quam placerat viverra
                            mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
                            donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
                            orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

                            <form method="post" action="#">
                                <div class="row">
                                    <div class="6u 12u$(mobile)"><input type="text" name="name" placeholder="Name" /></div>
                                    <div class="6u$ 12u$(mobile)"><input type="text" name="email" placeholder="Email" /></div>
                                    <div class="12u$">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="12u$">
                                        <input type="submit" value="Send Message" />
                                    </div>
                                </div>
                            </form>

                        </div>
                    </section>

            </div>
@stop