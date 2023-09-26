<Home-slider :images="@js(\App\Models\HomeSlider::all()->map(function ($item) {
            return [
                'url' => asset($item->image),
            ];
        }))"></Home-slider>
