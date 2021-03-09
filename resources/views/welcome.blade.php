@extends('layouts/app')
@section('content')

<div class="flex-center position-ref full-height main-container">

    <div class="container pt-5 mt-5">
        <div class="jumbotron">
            <h3 id="nameAuthor"></h3>
            <p><code></code></p>
        </div>
    </div>

    <div class="container text-center">
        <div role="tabpanel">
            <!-- List group -->
            <div class="list-group" role="tablist">
                <div class="row" id="myList">
                    <div class="col-sm category-tab">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#tortlar"
                            role="tab">Tortlar</a>
                    </div>
                    <div class="col-sm category-tab">
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#cupcakeler"
                            role="tab">Cupcake-lər</a>
                    </div>
                    <div class="col-sm category-tab">
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#keksler"
                            role="tab">Kekslər</a>
                    </div>
                    <div class="col-sm category-tab">
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#cheesecakeler"
                            role="tab">Cheesecake-lər</a>
                    </div>
                </div>
            </div>


            <!-- Tab panes -->
            <div class="tab-content mt-5 pb-5">
                <div class="tab-pane active" id="tortlar" role="tabpanel">

                    <div class="card-deck">
                        <div class="card">
                            <div class="productDiv">
                                <img data-enlargeable
                                    src="https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/145186333_148755163629909_1744257870923970877_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=36Fa3LV3Z3MAX8O_ht0&oh=2cc204e819111988f1b86a1ffb57bbc9&oe=60640B96"
                                    class="productImage card-img-top dovsanTort" loading="lazy" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Marsipanlı Tort</h5>
                                <p class="card-text">Biskvitli marsipanlı tort.</p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="productDiv">
                                <img src="https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/137625644_159030845989178_7375901958313223222_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=KngtMOWqgGwAX8lmUiB&oh=70c88279014b5755c88a57e5a0020cd6&oe=606576AD"
                                    class="productImage card-img-top spartakTort" loading="lazy" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Spartak</h5>
                                <p class="card-text">Qaymaqlı şokoladlı spartak tortu.</p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="productDiv">
                                <img src="https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/134579862_480219392943041_6827134145626250265_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=DyRM7wdzwkAAX-HwEQY&oh=d7714fdf08c0aa959b99f1e1a6af7d5e&oe=6066841E"
                                    class="productImage card-img-top yeniIlTort2021" loading="lazy" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yeni İl Tortu</h5>
                                <p class="card-text">Qozlu, şokoladlı, qaymaqlı yeni il tortu</p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane" id="cupcakeler" role="tabpanel">
                    <div class="card-deck">
                        <div class="card">
                            <div class="productDiv">
                                <img src="https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/146263736_100312038738057_1553917154071211534_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=NF3DjhkIHCUAX-_PB7I&oh=945302d5b5c0d4e8c29322e6807bc87e&oe=6070BC0A"
                                    class="productImage card-img-top cupcake1" loading="lazy" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cupcake 1</h5>
                                <p class="card-text"></p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="productDiv">
                                <img src="https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/129764168_116425046959537_8077134991116399044_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=IfKjpw01880AX_n2dD-&oh=5280a484ddc1be602914178d1af84d21&oe=6071A479"
                                    class="productImage card-img-top cupcake2" loading="lazy" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cupcake 2</h5>
                                <p class="card-text"></p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="productDiv">
                                <img src="https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/123416163_361211471623140_8377895987371336777_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=Li1SkuEYEoIAX8omyGI&oh=b97a6cbd162c79a7f3df76bcd36b43e6&oe=607003DF"
                                    class="productImage card-img-top cupcake3" loading="lazy" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cupcake 3</h5>
                                <p class="card-text"></p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane" id="keksler" role="tabpanel">

                    <div class="card-deck">
                        <div class="card">
                            <div class="productDiv">
                                <img src="https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/e35/154780182_275626787565239_8278515977738468395_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=tUAH4UMC_NwAX_QLjad&oh=2dc3a74f77d47370f06968bbe5d021f2&oe=6062BDB9"
                                    class="productImage card-img-top ekler" loading="lazy" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Ekler</h5>
                                <p class="card-text">Qaymaqlı və kremli</p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="productDiv">
                                <img src="https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/127958561_221453006079336_2123881493657455603_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=DD2DvjM-6TIAX8FgMI_&oh=b9c58df7f97625895dd4e34a5f174ad3&oe=6063AF14"
                                    class="productImage card-img-top gilemeyveliPiroq" loading="lazy" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Giləmeyvəli Keks</h5>
                                <p class="card-text">Yüngül</p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="productDiv">
                                <img src="https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/122656269_989157491566097_7300101664886747461_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=HWyis_tIyqAAX9xVDTh&oh=8da29485cd771b997db96c6bca6c0d24&oe=6063D1D3"
                                    class="productImage card-img-top almaliPiroq" loading="lazy" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Almalı Piroq</h5>
                                <p class="card-text">Darçınlı, almalı </p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane" id="cheesecakeler" role="tabpanel">

                    <div class="card-deck">
                        <div class="card">
                            <div class="productDiv">
                                <img src="https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/138601371_711614296206496_8391571245981885471_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=EuolG12Kfh0AX8vJDg5&oh=fb479de441762d1050d61b91565e0efe&oe=6064940A"
                                    class="productImage card-img-top portagalChCake" loading="lazy" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Portağallı çizkeyk</h5>
                                <p class="card-text"></p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="productDiv">
                                <img src="https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/131258111_816844822194472_8076183420921678746_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=6qD0zbUeirwAX8S-u1A&oh=b666541be692dab6351766f7b7e2ea1e&oe=606415B0"
                                    class="productImage card-img-top sokoladliChCake" loading="lazy" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Şokoladlı çizkeyk</h5>
                                <p class="card-text"></p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="productDiv">
                                <img src="https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/122682811_287265682365388_4171276271498622728_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=VBAOpBXgF-MAX-sYYNG&oh=f35195f45367b2f1cc5805cc3ce179b7&oe=6063CB25"
                                    class="productImage card-img-top ciyelekliChCake" loading="lazy" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Çiyələkli çizkeyk</h5>
                                <p class="card-text"></p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>



</div>
@endsection