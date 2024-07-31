<section class="">
    <div class="container">

        <?php
        function show_sertificates_block()
        {
            $show = get_field('show_sertificates');
            if (!$show) return;

            if (have_rows('sertificates')) : ?>

                <div class="">
                    <?php while (have_rows('sertificates')) : the_row(); ?>
                        <?php
                        $sertificate = get_sub_field('sertificate');
                        ?>

                        <?php if ($sertificate <> '') : ?>
                            <img src="<?php echo $sertificate['url']; ?>" alt="<?php echo $sertificate['alt']; ?>" />
                        <?php endif; ?>

                    <?php endwhile; ?>
                </div>

        <?php endif;
        }
        show_sertificates_block(); ?>

    </div>
</section>