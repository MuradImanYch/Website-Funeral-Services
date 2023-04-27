<?php /* Template Name: Əlaqə */ ?>
<?php include 'socNetwork.php' ?>
<?php get_header(); ?>
    
<section class="header">
    <div class="wrap">
        <div class="container">
            <h1>Bizimlə əlaqə</h1>
            <div><a href="/">Ana səhifə</a> <span>/</span> <p>Əlaqə</p></div>
        </div>
    </div>
</section>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3039.550736076824!2d49.952733!3d40.374485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403063925299c66f%3A0x4ad49b068f454431!2sZEYD%20Merasim%20evi!5e0!3m2!1sru!2sus!4v1682234724418!5m2!1sru!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<section class='contacts'>
    <div class="container">
        <div class="col">
            <img src="<?php load_images('ico/location2.png') ?>" alt="location" />
            <div>
                <h6>Ünvan</h6>
                <span>Məhəmməd hadi 66A</span>
            </div>
        </div>
        <div class="col">
            <img src="<?php load_images('ico/phone2.png') ?>" alt="location" />
            <div>
                <h6>Bizə zəng edin</h6>
                <span>+994552666878</span>
            </div>
        </div>
        <div class="col">
            <img src="<?php load_images('ico/envelope2.png') ?>" alt="location" />
            <div>
                <h6>Poçt</h6>
                <span>info@ritualnieuslugi-az.ru</span>
            </div>
        </div>
    </div>
</section>
<section id="feedback">
    <div class="container">
        <span>Ritual xidmətlər</span>
        <h3><span>Bizimlə</span> əlaqə saxlayın</h3>

        <form>
            <input type="text" name='name' placeholder='Adınız' />
            <input type="number" name='telephone' placeholder='Əlaqə nömrəsi' />
            <input type="email" name='email' placeholder='Poçt' />
            <textarea name="text" cols="30" rows="10" placeholder='Mətn'></textarea>
            
            <button>Göndər</button>
        </form>
    </div>
</section>

<?php get_footer(); ?>