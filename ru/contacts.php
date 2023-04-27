<?php /* Template Name: Контакты */ ?>
<?php include 'header.php' ?>
<?php include __DIR__ . '/../socNetwork.php' ?>
    
<section class="header">
    <div class="wrap">
        <div class="container">
            <h1>Связь с нами</h1>
            <div><a href="/ru">Главная</a> <span>/</span> <p>Контакты</p></div>
        </div>
    </div>
</section>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3039.550736076824!2d49.952733!3d40.374485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403063925299c66f%3A0x4ad49b068f454431!2sZEYD%20Merasim%20evi!5e0!3m2!1sru!2sus!4v1682234724418!5m2!1sru!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<section class='contacts'>
    <div class="container">
        <div class="col">
            <img src="<?php load_images('ico/location2.png') ?>" alt="location" />
            <div>
                <h6>Адрес</h6>
                <span>Məhəmməd hadi 66A</span>
            </div>
        </div>
        <div class="col">
            <img src="<?php load_images('ico/phone2.png') ?>" alt="location" />
            <div>
                <h6>Позвоните нам</h6>
                <span>+994552666878</span>
            </div>
        </div>
        <div class="col">
            <img src="<?php load_images('ico/envelope2.png') ?>" alt="location" />
            <div>
                <h6>Почта</h6>
                <span>info@ritualnieuslugi-az.ru</span>
            </div>
        </div>
    </div>
</section>
<section id="feedback">
    <div class="container">
        <span>Ритуальные услуги</span>
        <h3><span>Свяжитесь</span> с нами</h3>

        <form>
            <input type="text" name='name' placeholder='Ваше имя' />
            <input type="number" name='telephone' placeholder='Телефон' />
            <input type="email" name='email' placeholder='Почта' />
            <textarea name="text" cols="30" rows="10" placeholder='Сообщение'></textarea>
            
            <button>Отправить</button>
        </form>
    </div>
</section>

<?php include 'footer.php' ?>