<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlansController extends Controller
{
    public function index() {
        $pageProperty = array(
            'pageTitle' => 'Тарифные планы',
            'seoTitle' => 'SEO TITLE - Тарифные планы',
        );

        $plans = Plan::all();

        return view('plans.index', compact('pageProperty', 'plans'));
    }

    public function show(Plan $plan) {
        $pageProperty = array(
            'pageTitle' => $plan->title,
            'seoTitle' => 'SEO TITLE - ' . $plan->title,
        );

        return view('plans.show', compact('pageProperty', 'plan'));
    }
}
