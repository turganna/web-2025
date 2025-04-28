<?php
if(isset($_GET['start_ticket']) || isset($_GET['finish_ticket'])) {
    $start_ticket = (int)$_GET['start_ticket'];
    $finish_ticket = (int)$_GET['finish_ticket'];
    $ticket_count = 0;
    for ($i = $start_ticket; $i < $finish_ticket; $i++) {
        $ticket = (string)$i;
        echo $ticket;
        if (($ticket[0] + $ticket[1] + $ticket[2]) == ($ticket[3] + $ticket[4] + $ticket[5]) ) {
            echo $ticket, "<br>";
            $ticket_count += 1;
        } 
    }
    if ($ticket_count == 0) {
        echo "no";
    }
}
    