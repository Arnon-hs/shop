<div class="container form">
    <ul class="nav nav-tabs nav-justified id="myTab" role="tablist"">
        <li class="nav-item">
            <a class="nav-link" id="registration-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="true">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
        </li>
        <div id="x" onclick="closeWindow()">X</div>
    </ul>
    <div class="tab-content pt-4" id="myTabContent">
        <div class="tab-pane fade " id="registration" role="tabpanel" aria-labelledby="registration-tab"><?php include(ROOT.'/views/site/login/reg1.php');?></div>
        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab"><?php include(ROOT.'/views/site/login/login.php') ?></div>
    </div>
    
</div>
