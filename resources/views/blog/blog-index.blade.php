<x-main-layout>

            <!-- content begin -->
            <div class="no-bottom no-top" id="content">
                <div id="top"></div>
                
                <!-- blog index header start -->
                <section id="subheader" data-bgimage="url(images/background/5.png) bottom">
                        <div class="center-y relative text-center" data-scroll-speed="4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <form action='blank.php' class="row" id='form_subscribe' method="post" name="myForm">
                                    <div class="col-md-12 text-center">
                                        <h1>Blog</h1>
                                        <p>Nasze najnowsze posty</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <!-- blog index header end -->
                
    
                <!-- posty -->
                <section class="no-top">
                    <div class="container">
                        <div class="row">

                            <x-blog-featured-postcard :post="$posts[0]"/>

                            {{-- odcinek: 23, czas: 3:58 --}}

                            @foreach ($posts->skip(1) as $post)
                                <x-blog-postcard :post="$post"/>
                            @endforeach
                        

                        </div>
                    </div>
                </section>
    
            </div>

</x-main-layout>