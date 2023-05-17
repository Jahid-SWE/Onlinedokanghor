<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home.home');
    }
    public function about(){
        return view('frontend.about.about');
    }
    public function services(){
        return view('frontend.services.services');
    }
    public function our_team(){
        return view('frontend.our_team.our_team');
    }
    public function    team_details(){
        return view('frontend.our_team.team_details');
    }
    public function    error(){
        return view('frontend.error.error');
    }
    public function    fabric_printing(){
        return view('frontend.fabric.fabric_printing');
    }
    public function    fabric_dyeing(){
        return view('frontend.fabric.fabric_dyeing');
    }
    public function    engineering(){
        return view('frontend.engineering.engineering');
    }
    public function    manufacture(){
        return view('frontend.manufacture.manufacture');
    }
    public function    stich_fabric(){
        return view('frontend.stich.stich_fabric');
    }
    public function    design_fabric(){
        return view('frontend.design_fabric.design_fabric');
    }
    public function    project_one(){
        return view('frontend.project.project_one');
    }
    public function    project_two(){
        return view('frontend.project.project_two');
    }
    public function    blog_classic(){
        return view('frontend.blog.blog_classic');
    }
    public function   blog_grid(){
        return view('frontend.blog.blog_grid');
    }
    public function   blog_single(){
        return view('frontend.blog.blog_single');
    }
    public function   contact(){
        return view('frontend.contact.contact');
    }
    

    
 
}
