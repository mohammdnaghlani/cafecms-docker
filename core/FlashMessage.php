<?php

function checkFlashMessageExists()
{
    if(!isset($_SESSION['flashMessage'])){
        $_SESSION['flashMessage'] = [] ;
    }
    return $_SESSION['flashMessage'] ;
}

function clearMessage()
{
    return $_SESSION['flashMessage'] = [] ;
}

function setFlashMessage(string $type , string $message) 
{
    return $_SESSION['flashMessage'] = array(
        'type' => $type ,
        'body' => $message ,
    );
}
function showFlashMessage()
{
    if(!empty(checkFlashMessageExists())) :
        ?>
            <style>
                .swal-button-container{
                    float: left;
                    margin: 10px;
                }
                .swal-text {
                   text-align: right !important;
                    
                }
            </style>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                swal({
                        title: "<?=getMessage($_SESSION['flashMessage']['type'])?>",
                        text: "<?=getMessage($_SESSION['flashMessage']['body'])?>",
                        icon: "<?=($_SESSION['flashMessage']['type'])?>",
                        button: 'قبول', 
                        timer:6000,					  
                    });
            </script>
        <?php
            clearMessage() ;
        endif ;  
}
