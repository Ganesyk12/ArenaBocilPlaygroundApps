<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Fix_Column_Names extends CI_Migration
{
    public function up()
    {
        // Blog
        if ($this->db->field_exists('created_at', 'blog')) {
            $this->db->query("ALTER TABLE `blog` CHANGE `created_at` `date_created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        }

        // Event
        if ($this->db->field_exists('created_at', 'event')) {
            $this->db->query("ALTER TABLE `event` CHANGE `created_at` `date_created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        }

        // Promo
        if ($this->db->field_exists('created_at', 'promo')) {
            $this->db->query("ALTER TABLE `promo` CHANGE `created_at` `date_created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        }

        // Voucher
        if ($this->db->field_exists('created_at', 'voucher')) {
            $this->db->query("ALTER TABLE `voucher` CHANGE `created_at` `date_created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        }
    }

    public function down()
    {
        // No need for down for this specific fix.
    }
}
