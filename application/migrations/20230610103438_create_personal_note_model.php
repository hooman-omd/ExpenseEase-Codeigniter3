<?php defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_personal_note_model extends CI_Migration
{

    public function up()
    {
        echo "UPING 20230610103438 ,";

        $table_name = "personal_note";
        $pk_name = "id";
        $query = "CREATE TABLE IF NOT EXISTS `". $table_name."` (
                    `".$pk_name."` int(11) NOT NULL AUTO_INCREMENT,
                    `guid` varchar(16) NOT NULL,
                    `datetime` datetime NOT NULL,
                    `id_user` int(11) NOT NULL,
                    `datetime_modify` datetime NOT NULL,
                    `id_user_modify` int(11) NOT NULL,
                    `deleted` tinyint(1) NOT NULL,
                    `is_history` tinyint(1) NOT NULL,
                    `history_parent_guid` varchar(16) NOT NULL,
                    `title` varchar(255) NOT NULL,
                    `description` text NOT NULL,
                    PRIMARY KEY (`".$pk_name."`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
        $this->db->query($query);

        echo " DONE!.<br/>";
    }

    // ---------------------------------------------------------------------

    public function down()
    {
        echo "DOWNING 20230610103438 ,";
        $table_name = "personal_note";
        $this->dbforge->drop_table($table_name);
        echo " DONE!.<br/>";
    }

    // ---------------------------------------------------------------------
}