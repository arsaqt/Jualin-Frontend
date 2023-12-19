<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('jualin/images/favicon.ico')}}" type="image/x-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

  <!-- Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
">
  <!-- Animate On Scroll -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="{{asset('jualin/styles.css')}}" />

  <title>Jualin Shop</title>
</head>

<body>
  <header id="header" class="header">
    <div class="navigation">
      <div class="container">
        <nav class="nav">
          <div class="nav__hamburger">
            <svg>
              <use xlink:href="{{asset('jualin/images/sprite.svg#icon-menu')}}"></use>
            </svg>
          </div>

          <div class="nav__logo">
            <a href="/" class="scroll-link">
              JUALIN
            </a>
          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <span class="nav__category">JUALIN</span>
              <a href="#" class="close__toggle">
                <svg>
                  <use xlink:href="{{asset('jualin/images/sprite.svg#icon-cross')}}"></use>
                </svg>
              </a>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="/" class="nav__link">Home</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">Products</a>
              </li>
              <li class="nav__item">
                <a href="cart.html" class="nav__link">Cart</a>
              </li>
            </ul>
          </div>

          <div class="nav__icons">
            <a href="user.html" class="icon__item">
              <svg class="icon__user">
                <use xlink:href="{{asset('jualin/images/sprite.svg#icon-user')}}"></use>
              </svg>
            </a>

            <a href="#" class="icon__item">
              <svg class="icon__search">
                <use xlink:href="{{asset('jualin/images/sprite.svg#icon-search')}}"></use>
              </svg>
            </a>

            <a href="cart.html" class="icon__item">
              <svg class="icon__cart">
                <use xlink:href="{{asset('jualin/images/sprite.svg#icon-shopping-basket')}}"></use>
              </svg>
              <span id="cart__total">0</span>
            </a>
          </div>
        </nav>
      </div>
    </div>

    <div class="page__title-area">
      <div class="container">
        <div class="page__title-container">
          <ul class="page__titles">
            <li>
              <a href="/">
                <svg>
                  <use xlink:href="{{asset('jualin/images/sprite.svg#icon-home')}}"></use>
                </svg>
              </a>
            </li>
            <li class="page__title">Product</li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main id="main">
    <div class="container">
      <!-- Products Details -->

      <!-- Related Products -->
      <section class="section related__products">
        <div class="title__container">
          <div class="section__title filter-btn active">
            <span class=" dot"></span>
            <h1 class="primary__title">Handphone</h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_3">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides latest-center">
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/sumsung/samsung5.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Samsung Galaxy</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$900</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/iPhone/iphone6.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone 11</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$750</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/sumsung/samsung3.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Samsung Galaxy</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$850</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/iPhone/iphone2.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone 11</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$450</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/headphone/headphone4.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Sony WH-CH510</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$600</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/sumsung/samsung1.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Samsung Galaxy</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$300</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/headphone/headphone2.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Sony WH-CH510</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$300</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/headphone/headphone1.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Sony WH-CH510</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$250</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/iPhone/iphone1.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone XR</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$550</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>

              </ul>
            </div>

            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <svg>
                  <use xlink:href="{{asset('jualin/images/sprite.svg#icon-arrow-left2')}}"></use>
                </svg>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <svg>
                  <use xlink:href="{{asset('jualin/images/sprite.svg#icon-arrow-right2')}}"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- Latest Products -->
      <section class="section latest__products">
        <div class="title__container">
          <div class="section__title filter-btn active" data-id="Latest Products">
            <span class="dot"></span>
            <h1 class="primary__title">Laptop</h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_2">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides latest-center">
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/iPhone/iphone6.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone 11</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$750</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/sumsung/samsung5.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Samsung Galaxy</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$900</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/headphone/headphone4.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Sony WH-CH510</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$600</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/sumsung/samsung3.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Samsung Galaxy</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$850</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/iPhone/iphone2.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone 11</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$450</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/headphone/headphone2.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Sony WH-CH510</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$300</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/sumsung/samsung1.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Samsung Galaxy</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$300</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/headphone/headphone1.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Sony WH-CH510</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$250</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/iPhone/iphone1.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone XR</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$550</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>

              </ul>
            </div>

            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <svg>
                  <use xlink:href="{{asset('jualin/images/sprite.svg#icon-arrow-left2')}}"></use>
                </svg>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <svg>
                  <use xlink:href="{{asset('jualin/images/sprite.svg#icon-arrow-right2')}}"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer__top">
        <div class="footer-top__box">
          <h3>EXTRAS</h3>
          <a href="#">Brands</a>
          <a href="#">Gift Certificates</a>
          <a href="#">Affiliate</a>
          <a href="#">Specials</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-top__box">
          <h3>INFORMATION</h3>
          <a href="#">About Us</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact Us</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-top__box">
          <h3>MY ACCOUNT</h3>
          <a href="#">My Account</a>
          <a href="#">Order History</a>
          <a href="#">Wish List</a>
          <a href="#">Newsletter</a>
          <a href="#">Returns</a>
        </div>
        <div class="footer-top__box">
          <h3>CONTACT US</h3>
          <div>
            <span>
              <svg>
                <use xlink:href="{{asset('jualin/images/sprite.svg#icon-location')}}"></use>
              </svg>
            </span>
            42 Dream House, Dreammy street, 7131 Dreamville, USA
          </div>
          <div>
            <span>
              <svg>
                <use xlink:href="{{asset('jualin/images/sprite.svg#icon-envelop')}}"></use>
              </svg>
            </span>
            company@gmail.com
          </div>
          <div>
            <span>
              <svg>
                <use xlink:href="{{asset('jualin/images/sprite.svg#icon-phone')}}"></use>
              </svg>
            </span>
            456-456-4512
          </div>
          <div>
            <span>
              <svg>
                <use xlink:href="{{asset('jualin/images/sprite.svg#icon-paperplane')}}"></use>
              </svg>
            </span>
            Dream City, USA
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="footer-bottom__box">

      </div>
      <div class="footer-bottom__box">

      </div>
    </div>
    </div>
  </footer>

  <!-- End Footer -->

  <!-- Go To -->

  <a href="#header" class="goto-top scroll-link">
    <svg>
      <use xlink:href="{{asset('jualin/images/sprite.svg#icon-arrow-up')}}"></use>
    </svg>
  </a>

  <!-- Glide Carousel Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>

  <!-- Animate On Scroll -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Custom JavaScript -->
  <script src="{{asset('jualin/js/products.js')}}"></script>
  <script src="{{asset('jualin/js/index.js')}}"></script>
  <script src="{{asset('jualin/js/slider.js')}}"></script>
</body>

</html>
