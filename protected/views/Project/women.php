<style>
    #test{
        margin-top: -20px;
    }
    
    #test2 {
        margin-left: 160px;
    }
    
    
    #hel {
        background: black;
        color: black;
        width:100%;
        height:2px;
        margin:2em 0;
        padding:0;
        border:none;
    }
</style>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        
        <?=CHtml::image(YII::app()->baseUrl."/images/womenlogo.jpg",'name', array('width' =>1000 , 'height'=>75
            ))?>
        <div class="row">
            <div class="col-sm-3">
                <div class="col-sm-offset-6">
                    <ul class="nav nav-pills nav-stacked"><br>
                       <li role="presentation"><a href="#">สินค้ามาใหม่</a></li>
                       <li role="presentation"><a href="#">Sale %</a></li>
                       <br>
                       <div style="margin-left: 15px; font-weight: bold;">เสื้อผ้า</div>
                       <hr id="hel">
                       <li role="presentation"><a href="#">ชุดกระโปรง</a></li>
                       <li role="presentation"><a href="#">เสื้อเบลาซ์</a></li>
                       <li role="presentation"><a href="#">กระโปรง</a></li>
                       <li role="presentation"><a href="#">กางเกงและเลกกิ้ง</a></li>
                       <br>
                       <div style="margin-left: 15px; font-weight: bold;">รองเท้า</div>
                       <hr id="hel">
                       <li role="presentation"><a href="#">รองเท้าส้นสูง</a></li>
                       <li role="presentation"><a href="#">รองเท้าส้นแบน</a></li>
                       <li role="presentation"><a href="#">รองเท้าแตะ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6"><br>
                <?=CHtml::image(YII::app()->baseUrl."/images/womenlogo.jpg",'name', array('width' =>500 , 'height'=>500
                    ))?>
            </div>
            <div class="col-sm-3"></div> 
        </div>