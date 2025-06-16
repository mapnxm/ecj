<script>
    const profil = document.getElementById('profil');
    const profilBtn = document.getElementById('profil-btn');
    profilBtn.addEventListener('click', function(){
        profil.classList.toggle('active');
    });
    document.addEventListener('click', function(e) {
        if (!profilBtn.contains(e.target) && !profil.contains(e.target)) {
            profil.classList.remove('active');
        }
    });

    // const search = document.getElementById('search');
    // const label = document.getElementById('labelSearch');

    // search.addEventListener('focusin', function(){
    //         label.style.display = 'none';
    // });
    // search.addEventListener('focusout', function(){
    //     if (!search.value) {
    //         label.style.display = 'inline';
    //     }else{
    //         label.style.display = 'none';
    //     }
    // });
</script>
