@extends('layouts.app')
@section('content')

    

<div class="row">
    <div class="col-75">
      <div class="container">
        <form action="/action_page.php">
  
          <div class="row">
            <div class="col-50">
              <h3>Платежный адрес</h3>
              <label for="fname"><i class="fa fa-user"></i>Имя</label>
              <input type="text" id="fname" name="firstname" placeholder="Введите имя">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="Введите email">
              <label for="adr"><i class="fa fa-address-card-o"></i>Адрес</label>
              <input type="text" id="adr" name="address" placeholder="Введите адрес">
              <label for="city"><i class="fa fa-institution"></i>Город</label>
              <input type="text" id="city" name="city" placeholder="Введите город">
  
              <div class="row">
                <div class="col-50">
                  <label for="state">Государство</label>
                  <input type="text" id="state" name="state" placeholder="Введите откуда вы">
                </div>
                <div class="col-50">
                  <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" placeholder="10001">
                </div>
              </div>
            </div>
  
            <div class="col-50">
              <h3>Платеж</h3>
              <label for="fname">Выбрать способ оплаты</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Номер карты</label>
              <input type="text" id="cname" name="cardname" placeholder="Введите номер карты">
              <label for="ccnum">Cvc код</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="CVC">
              <label for="expmonth">Год вашего рождения</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="Введите год рождения">
  
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Годен год</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2021">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>
  
          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Адрес дставки совпадает с платежным адресом
          </label>
          <input type="submit" value="Продолжить оформление заказа" class="btn">
        </form>
      </div>
    </div>
  
    <div class="col-25">
      <div class="container">
        <h4>Корзина
          <span class="price" style="color:black">
            <i class="fa fa-shopping-cart"></i>
            <b>4</b>
          </span>
        </h4>
        <p><a href="#">Элемент 1</a> <span class="price">$15</span></p>
        <p><a href="#">Элемент 2</a> <span class="price">$5</span></p>
        <p><a href="#">Элемент 3</a> <span class="price">$8</span></p>
        <p><a href="#">Элемент 4</a> <span class="price">$2</span></p>
        <hr>
        <p>Всего <span class="price" style="color:black"><b>$30</b></span></p>
      </div>
    </div>
  </div>


@endsection