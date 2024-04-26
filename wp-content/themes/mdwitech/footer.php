<footer class="footer text-center py-2 theme-bg-dark">
    <p class="copyright"><a href="https://github.com/mdwiastika">Mdwiastika</a></p>
    <?php
    if (is_active_sidebar('footer-1')) {
        dynamic_sidebar('footer-1');
    }
    ?>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>