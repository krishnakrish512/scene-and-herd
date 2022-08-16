<?php
/**
 * List of all the avialble sections for flexible content.
 */
if (have_rows('flexible_content')) :
    while (have_rows('flexible_content')) : the_row();
        switch (get_row_layout()) {
            case 'banner_section':
                get_template_part('template-parts/section', 'banner');
            break;
            case 'intro_section':
                get_template_part('template-parts/section', 'intro');
            break;
            case 'service_section':
                get_template_part('template-parts/section', 'service');
            break;
            case 'team_section':
                get_template_part('template-parts/section', 'team');
            break;
            case 'about_section':
                get_template_part('template-parts/section', 'about');
            break;
            case 'cta_section':
                get_template_part('template-parts/section', 'cta');
            break;
            case 'team_banner_section':
                get_template_part('template-parts/section', 'team-banner');
            break;
            case 'team_last_section':
                get_template_part('template-parts/section', 'team-last');
            break;
            case 'session_section':
                get_template_part('template-parts/section', 'session');
            break;
            case 'session_mid_section':
                get_template_part('template-parts/section', 'session-mid');
            break;
            case 'contact_section':
                get_template_part('template-parts/section', 'contact');
            break;
            case 'booking_section':
                get_template_part('template-parts/section', 'booking');
            break;
            case 'plain_section':
                get_template_part('template-parts/section', 'plain');
            break;  
            
        }
    endwhile; 
endif;