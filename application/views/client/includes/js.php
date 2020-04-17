<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="assets/js/slick.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-3.0.1.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/aos.js"></script>
<script type="text/javascript" src="assets/js/baguetteBox.min.js"></script>

<!-- play slide header -->
<script type="text/javascript" src="assets/js/sliders.js"></script>
<!-- end play slide header -->
<script>
    AOS.init({
        easing: 'ease-in-out-sine',
        offset: 200,
        duration: 500
    });
    // AOS.init({
    //     easing: 'ease-in-out-sine'
    // });

    // setInterval(addItem, 300);

    // var itemsCounter = 1;
    // var container = document.getElementById('aos-demo');

    // function addItem() {
    //     if (itemsCounter > 42) return;
    //     var item = document.createElement('div');
    //     item.classList.add('aos-item');
    //     item.setAttribute('data-aos', 'fade-up');
    //     item.innerHTML = '<div class="aos-item__inner"><h3>' + itemsCounter + '</h3></div>';
    //     container.appendChild(item);
    //     itemsCounter++;
    // }
</script>
<script>
    baguetteBox.run('.compact-gallery', {
        animation: 'slideIn'
    });
</script>