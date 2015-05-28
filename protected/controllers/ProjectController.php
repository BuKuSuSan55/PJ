<?php

    class ProjectController extends Controller{
        
        public function actionMain(){
            $this-> renderPartial ('//Project/main');
        }
        
        public function actionMen(){
            $this-> renderPartial ('//Project/men');
            
        }
        
        public function actionWomen(){
            $this-> renderPartial ('//Project/women');
            
        }
        
        public function actionSalelove(){
            $this-> renderPartial ('//Project/salelove');
            
        }
        
        public function actionRegister(){
            $this-> renderPartial ('//Project/register');
            
        }
        
        public function actionLogin(){
            $this-> renderPartial ('//Project/login');
            
        }
    }
    

