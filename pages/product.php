<?php require_once'../Header_Footer/Header.php';?>
    <section class="topicHeader">
        <div class="leftTopicHeader"><span>new arrivals</span></div>
        <div class="rightTopicHeader"><span>Home / Men / </span><span class="Arrivals">new arrivals</span></div>
    </section>

    <section class="box container">
        <div class="leftProduct">
        <ul>
            <li><a href="#">Category</a>
                 <ul>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Bags</a></li>
                    <li><a href="#">Denim</a></li>
                    <li><a href="#">Hoodies & Sweatshirts</a></li>
                    <li><a href="#">Jackets & Coats</a></li>
                    <li><a href="#">Pants</a></li>
                    <li><a href="#">Polos</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">Shorts</a></li>
                    <li><a href="#">Sweaters & Knits</a></li>
                    <li><a href="#">T-Shirts</a></li>
                    <li><a href="#">Tanks</a></li>
                </ul>
            </li>
            <li><a href="#">Brand</a>
            <ul><li>1</li></ul></li>
            <li><a href="#">Designer</a>
            <ul><li>2</li></ul></li>
        </ul>
        </div>
        <div class="rightProduct">
            <div class="optionProduct">

                <div class="topicOption"><span>Trending now</span>
                    <div class="options">Bohemian    |    Floral    |    Lace </div>
                    <div class="options">Floral    |    Lace    |    Bohemian</div>
                </div>

                <div class="topicOption"><span>Size</span>
                    <form action="">
                    <div class="options"><input type="checkbox" value="XXS"> XXS   <input type="checkbox" value="XS"> XS    <input type="checkbox" value="S"> S <input type="checkbox" value="M"> M </div>
                    <div class="options"><input type="checkbox" value="L"> L <input type="checkbox" value="XL"> XL  <input type="checkbox" value="XXL"> XXL </div>
                    </form>
                </div>

                <div class="topicOption"><span>Price</span>
                    <form action="">
                        <input type="range">
                    </form>
                </div>

            </div>
            <div class="sortBlock">
                <button>Sort by</button>
                <select name="" id="">
                    <option value="name">Name</option>
                    <option value="age">Age</option>
                </select>
                <button>Show</button>
                <select name="" id="">
                    <option value="09">09</option>
                    <option value="08">08</option>
                </select>
            </div>

            <div class="imgCartProduct">
                <div>
                   <div> <img src="../img/Product/Layer_4.png" alt=""></div>
                    <div><img src="../img/Product/Layer_43.png" alt=""></div>
                        <div><img src="../img/Product/Layer_44.png" alt=""></div>
                </div>
                <div>
                    <div><img src="../img/Product/Layer_45.png" alt=""></div>
                        <div><img src="../img/Product/Layer_46.png" alt=""></div>
                            <div><img src="../img/Product/Layer_47.png" alt=""></div>
                </div>
                <div>
                    <div><img src="../img/Product/Layer_48.png" alt=""></div>
                        <div><img src="../img/Product/Layer_49.png" alt=""></div>
                            <div><img src="../img/Product/Layer_50.png" alt=""></div>
                 </div>
            </div>

        <div class="pagination">
            <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>...</li>
                <li>20</li>
            </ul>
        </div>
            <div class="ViewAllProduct">
                <button>View all</button>
            </div>

        </div>
    </section>







<?php require_once '../Header_Footer/Footer.php' ?>