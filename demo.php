<?php 

include(__DIR__.'/lang.php');
?>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="./jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&display=swap');
</style>
<body>
    <div class="main_container">
        <div class="about_me"></div>
        <div class="github_intro"></div>
    </div>

    <div class="codeLink">
        <div class="skillcard1">
            <div class="codePage">
                <div class="logo"></div>
                <div class="Content">
                    <?php for ($i=0; $i<count($pypjname); $i++) {?>
                        <ol>
                            <span><?=$pypjname[$i]?></span>
                            <svg onclick="window.open('<?=$pylink[$i]?>')" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" frameborder="0" cellspacing="0" width="16" height="16" style=" border:none" width="16">
                                <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                            </svg>
                            <ul>
                                <li><?=$pytxt[$i]?></li>
                            </ul>
                        </ol>
                        <br>
                    <?php } ?>
                </div>
            </div>
            <div class="codePage">
                <div class="logo"></div>
                <div class="Content">   
                    <?php for ($i=0; $i<count($cpjname); $i++) {?>
                        <ol>
                            <span><?=$cpjname[$i]?></span>
                            <svg onclick="window.open('<?=$clink[$i]?>')" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" frameborder="0" cellspacing="0" width="16" height="16" style=" border:none" width="16">
                                <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                            </svg>
                            <ul>
                                <li><?=$ctxt[$i]?></li>
                                <li><?=$ctxt[$i+1]?></li>
                                <?php if ( $i== count($cpjname)-1 ) {?>
                                    <li><?=$ctxt[$i+2]?></li>
                                <?php } ?>
                            </ul>
                        </ol>
                        <br>
                    <?php } ?>            
                </div>
            </div>
            <div class="codePage">
                <div class="logo"></div>
                <div class="Content">
                    <?php for ($i=0; $i<count($javapjname); $i++) {?>
                        <ol>
                            <span><?=$javapjname[$i]?></span>
                            <svg onclick="window.open('<?=$javalink[$i]?>')" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" frameborder="0" cellspacing="0" width="16" height="16" style=" border:none" width="16">
                                <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                            </svg>
                            <ul>
                                <li><?=$javatxt[$i]?></li>
                            </ul>
                        </ol>
                        <br>
                    <?php } ?>               
                </div>
            </div>
        </div>
        <div class="skillcard2">
            <div class="codePage">
                <div class="logo"></div>
                <div class="Content">
                    
                    <ol>
                        <span><?=$other[0]?></span>
                        <ul>
                            <?php for($i=0; $i<6; $i++) {?>
                                <li><?=$othertxt[$i]?></li>
                            <?php } ?>
                        </ul>
                    </ol>
                    <br>
                    <ol>
                        <span><?=$other[1]?></span>
                        <li><?=$othertxt[6]?></li>
                    </ol>
                                
                </div>
            </div>
            <div class="codePage"></div>
            <div class="codePage"></div>
        </div>
        <div class='scrollbtn'>
            <span></span>
            <span></span>
        </div>
    </div>


    <script type="text/javascript" src="demo.js"></script>
</body>
