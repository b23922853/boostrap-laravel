<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/cart-1.css')}}">
    <title>index</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light ">
            <div class="container d-flex justify-content-between">
                <a class="icon" href="">
                    <img class="" src="https://lesson-bootstrap.dev-hub.io/img/logo.svg">
                </a>
                <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNAV" class="navbar-toggler"
                    aria-controls="navbarNAV" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNAV">
                    <ul class="navbar-nav d-flex align-items-center">
                        <li class="nav-item ">
                            <a class="nav-link active" href="#">Blog</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#">About</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#">Contact</a>
                        </li>
                        <li class="nav-item  d-flex">
                            <a class="nav-link active px-2" href="#"><i class="fas fa-shopping-cart fa-2x"></i></a>
                            <a class="nav-link active px-2" href="#"><i class="fas fa-user-circle fa-2x "></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="pt-5 pb-5 background">
        <div class="container main p-5 border-bottom rounded">
            <section>
                <h4>購物車</h4>
                <div class="steps border-bottom d-flex  w-100 pb-4">
                    <div
                        class="step w-25 d-flex flex-column align-items-center justify-content-center  position-relative">
                        <div class="progress position-absolute col-6 col-sm-7 col-lg-9">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="circle  d-flex align-items-center justify-content-center rounded-circle actived">
                            1
                        </div>
                        <span>確認購物車</span>

                    </div>
                    <div
                        class="step  w-25 d-flex flex-column align-items-center justify-content-center position-relative">
                        <div class="progress position-absolute col-6 col-sm-7 col-lg-9">
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="circle  d-flex align-items-center justify-content-center rounded-circle ">
                            2
                        </div>
                        <span>付款與運送方式</span>

                    </div>
                    <div
                        class="step  w-25 d-flex flex-column align-items-center justify-content-center position-relative">
                        <div class="progress position-absolute col-6 col-sm-7 col-lg-9">
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="circle  d-flex align-items-center justify-content-center rounded-circle ">
                            3
                        </div>
                        <span>填寫資料</span>

                    </div>
                    <div class="step  w-25 d-flex flex-column align-items-center justify-content-center">

                        <div class="circle  d-flex align-items-center justify-content-center rounded-circle ">
                            4
                        </div>
                        <span>完成訂購</span>
                    </div>
                </div>
            </section>
            <section>
                <div class="items d-flex flex-wrap mt-3">
                    <h3>訂單明細</h3>
                    <div class="item d-flex w-100 border-bottom mt-3 pb-3">
                        <img class="me-3 rounded-circle"
                            src="data:image/jpeg;base64,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"
                            alt="">
                        <div class="item-name d-flex flex-column">
                            <span>Chicken momo</span>
                            <span>#41551</span>
                        </div>
                        <div class="item-total d-flex ms-auto ">
                            <div class="count">
                                <span class="mi" data-index="0">-</span>
                                <input type="number" name="" data-index="0" value="1" class="mx-1 input">
                                <span class="pl" data-index="0">+</span>
                                <span class="cost ms-3" data-index="0">$10.50</span>
                            </div>
                        </div>
                    </div>

                    <div class="item d-flex  w-100 border-bottom mt-3 pb-3">
                        <img class="me-3 rounded-circle"
                            src="data:image/jpeg;base64,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"
                            alt="">
                        <div class="item-name  d-flex flex-column">
                            <span>Spicy Mexican potatoes</span>
                            <span>#66999</span>
                        </div>

                        <div class="item-total d-flex ms-auto">
                            <div class="count">
                                <span class="mi" data-index="1">-</span>
                                <input type="number" name="" data-index="1" value="1" class="mx-1 input">
                                <span class="pl" data-index="1">+</span>
                                <span class="cost ms-3" data-index="1">$10.50</span>
                            </div>

                        </div>
                    </div>
                    <div class="item d-flex w-100  border-bottom mt-3 mb-4 pb-3">
                        <img class="me-3 rounded-circle"
                            src="data:image/jpeg;base64,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"
                            alt="">
                        <div class="item-name  d-flex flex-column ">
                            <span>Breakfast</span>
                            <span>#86577</span>
                        </div>

                        <div class="item-total d-flex ms-auto">
                            <div class="count">
                                <span class="mi" data-index="2">-</span>
                                <input type="number" name="" data-index="2" value="1" class="mx-1 input">
                                <span class="pl" data-index="2">+</span>
                                <span class="cost ms-3" data-index="2">$10.50</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="unify d-flex flex-column align-items-end pt-3 pb-3 border-bottom w-100">
                    <div class="number w-25 d-flex justify-content-between mb-2">
                        <label for="">數量:</label>
                        <span class="total-count">3</span>
                    </div>
                    <div class="subtotal  w-25 d-flex justify-content-between mb-2">
                        <label for="">小計:</label>
                        <span  class="total-sum">$24.90</span>
                    </div>
                    <div class="freight  w-25 d-flex justify-content-between mb-2">
                        <label for="">運費:</label>
                        <span class="total-freight">$24.90</span>
                    </div>
                    <div class="total  w-25 d-flex justify-content-between">
                        <label for="">總計:</label>
                        <span class="total-big-sum">$24.90</span>
                    </div>
                </div>
                <div class="buttons  mt-5 d-flex justify-content-between">
                    <a href="index.html" class="d-flex align-items-center text-dark text-decoration-none"><i class="fas fa-arrow-left me-2"></i>返回購物</a>
                    <a href="cart-2.html"><button type="button" class="btn btn-primary">下一步</button></a>
                </div>

            </section>
        </div>
    </section>
    <footer>
        <div class="container d-flex py-5  mb-5 flex-wrap">
            <div
                class="left-block mb-3 mb-md-0 d-flex flex-column align-items-center align-items-md-start justify-content-md-center mb-5 col-12 col-md-4 col-lg-4 text-center text-md-start">
                <a class="text-decoration-none fs-3 mb-3" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #162446;
                                }

                                .cls-2 {
                                    fill: #fff;
                                }
                            </style>
                        </defs>
                        <title>資產 2</title>
                        <g id="圖層_2" data-name="圖層 2">
                            <g id="圖層_1-2" data-name="圖層 1">
                                <circle class="cls-1" cx="20" cy="20" r="20"></circle>
                                <path class="cls-2"
                                    d="M20,7l7.13,4.11a7.91,7.91,0,0,1,3.95,6.84v6.8l-8.61-5V18.32l7.37,4.26V18.63a7.89,7.89,0,0,0-3.95-6.85L21.28,9.1V33.25L9,26.14V13.35l5.89,3.4a7.91,7.91,0,0,1,3.95,6.85v4.76l-1.23-.71V24.31a7.92,7.92,0,0,0-4-6.85l-3.42-2v9.94L20,31.11Z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <span class="text-dark">數位方塊</span>
                </a>
                <p>Air plant banjo lyft occupy retro adaptogen indego</p>
            </div>
            <div
                class="right-block d-flex  flex-wrap align-items-center justify-content-center col-12 col-md-8  col-lg-8 ">
                <ul class="list-group col-12 mb-3 col-md-6 col-lg-3 align-items-center">CATEGORIES
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">First
                            Link</a>
                    </li>
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">Second
                            Link</a>
                    </li>
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">Third
                            Link</a>
                    </li>
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">Fourth
                            Link</a>
                    </li>
                </ul>
                <ul class="list-group col-12 mb-3 col-md-6 col-lg-3 align-items-center">CATEGORIES
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">First
                            Link</a>
                    </li>
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">Second
                            Link</a>
                    </li>
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">Third
                            Link</a>
                    </li>
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">Fourth
                            Link</a>
                    </li>
                </ul>
                <ul class="list-group col-12 mb-3 col-md-6 col-lg-3 align-items-center">CATEGORIES
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">First
                            Link</a>
                    </li>
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">Second
                            Link</a>
                    </li>
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">Third
                            Link</a>
                    </li>
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">Fourth
                            Link</a>
                    </li>
                </ul>
                <ul class="list-group col-12  mb-3 col-md-6 col-lg-3 align-items-center">CATEGORIES
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">First
                            Link</a>
                    </li>
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">Second
                            Link</a>
                    </li>
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">Third
                            Link</a>
                    </li>
                    <li class="list-group-item border-0 ps-0"><a href="" class="text-decoration-none text-dark">Fourth
                            Link</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="full d-flex bg-light">
            <div class="container">
                <div class="under-footer d-flex  w-100 m-3 flex-column  flex-sm-row align-items-center">
                    <p class="m-0">© 2020 Tailblocks —<a href="" class="text-decoration-none text-dark"> @knyttneve</a>
                    </p>
                    <div class="svg-block ms-sm-auto ">
                        <a href="" class="text-decoration-none text-dark">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a href="" class="text-decoration-none text-dark  ms-2"> <svg fill="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                                viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a href="" class="text-decoration-none text-dark ms-2"> <svg fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                                viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a href="" class="text-decoration-none text-dark ms-2"> <svg fill="currentColor"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script>
        const blocks = document.querySelectorAll(".count");
        const mis = Array.from(document.querySelectorAll(".mi"));
        const pls = Array.from(document.querySelectorAll(".pl"));
        const inputs = Array.from(document.querySelectorAll(".input"));
        const costs=Array.from(document.querySelectorAll(".cost"));
        const count=document.querySelector(".total-count");
        const sum=document.querySelector(".total-sum");
        const freight=document.querySelector(".total-freight");
        const total=document.querySelector(".total-big-sum");
        mis.forEach(mi=>mi.addEventListener("click",minus));
        pls.forEach(pl=>pl.addEventListener("click",pluse));
        inputs.forEach(input=>input.addEventListener("change",enter))
        function enter(e){
            const el=e.target;
            const index = el.dataset.index;
            costs[index].textContent=`$${(inputs[index].value * 10.50).toFixed(2)}`
            update()
        }
        function pluse(e) {
            const el=e.target;
            const index = el.dataset.index;
            inputs[index].value++;
            costs[index].textContent=`$${(inputs[index].value * 10.50).toFixed(2)}`
            update()
        }
        function minus(e) {
            const el=e.target;
            const index = el.dataset.index;
            if(inputs[index].value>0){
                inputs[index].value--;
            }
            costs[index].textContent=`$${(inputs[index].value * 10.50).toFixed(2)}`
            update()
        }
        function update(){
            let count1=0;
            let sum1=0;
            let total1=0;
            for (let i = 0; i < inputs.length; i++) {
                count1+=(parseInt(inputs[i].value));
                sum1+=(parseInt(inputs[i].value)*10.5);
            }
            total1=sum1+24.9;
            // console.log(count1,sum1.toFixed(2),total1.toFixed(2));
            // console.log( typeof(count1,sum1.toFixed(2),total1.toFixed(2)));
            count.textContent=`${count1}`;
            sum.textContent=`$${sum1.toFixed(2)}`;
            total.textContent=`$${total1.toFixed(2)}`
        }

    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>!--
</body>

</html>