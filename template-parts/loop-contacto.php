<ul class="data-contact">
    <?php if(!empty(get_option('dc_telefonofijo'))): ?>
    <li class="data telefono">
        TL: <a href="tel:<?php echo get_option('dc_telefonofijo'); ?>" target="_blank" rel="noopener noreferrer"><?php echo get_option('dc_telefonofijo'); ?></a>
    </li>
    <?php endif; ?>
    <?php if(!empty(get_option('dc_whatsapp'))): ?>
    <li class="data whatsapp">
        WSP: <a href="<?php echo get_option('dc_whatsapp_link'); ?>" target="_blank" rel="noopener noreferrer">+51 <?php echo get_option('dc_whatsapp'); ?></a>
    </li>
    <?php endif; ?>
    <?php if(!!empty(get_option('dc_email'))): ?>
    <li class="data email">
        Email: <a href="mailto:<?php echo get_option('dc_email') ?>" target="_blank" rel="noopener noreferrer"><?php echo get_option('dc_email') ?></a>
    </li>
    <?php endif; ?>
    <?php if(!empty(get_option('dc_direccion'))): ?>
    <li class="data ubicacion">
        Ubicación:
        <?php if(!empty(get_option('dc_linkmaps'))): ?>
        <a href="<?php echo get_option('dc_linkmaps'); ?>" target="_blank" rel="noopener noreferrer">
        <?php endif; ?>
            <?php echo get_option('dc_direccion'); ?>
        <?php if(!empty(get_option('dc_linkmaps'))): ?>
        </a>
        <?php endif; ?>
    </li>
    <?php endif; ?>
</ul>