        <div class="tz-breaking-news">
            <div class="container">
                <span class="breaking-title">TIN NHANH</span>
                <ul class="tz-breaking-content pull-left">
                   @foreach ($dataMessage as $item)
                        <li>
                            <p>{{$item->content}}</p>
                        </li>
                   @endforeach    
                </ul>
                <div class="pull-right tz-control-news">
                    <button class="tz-button-next breaking-prev">
                        <i class="fa fa-angle-left"></i>
                    </button>
                    <button class="tz-button-prev breaking-next">
                        <i class="fa fa-angle-right"></i>
                    </button>
                </div>
            </div>
        </div>