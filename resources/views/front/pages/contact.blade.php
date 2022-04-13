@extends('front.layout.master')

@section("content")
            <div class="contact-container">
                <div class="contact-image">
                    <img src="{{Storage::url('background-dancers.jpg')}}" alt="tango">
                </div>
                <div class="contact-form">
                    <div class="contact-info">
                        <div class="contact-item">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                            </svg>
                            <p>AV. JOAN MIRO 36</p>
                        </div>
                        <div class="contact-item">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M22 20H18V23L13 18.5L18 14V17H22V20M20 4H4A2 2 0 0 0 2 6V18A2 2 0 0 0 4 20H11.35A5.8 5.8 0 0 1 11 18A6 6 0 0 1 22 14.69V6A2 2 0 0 0 20 4M20 8L12 13L4 8V6L12 11L20 6Z" />
                            </svg>
                            <p>javieru2001@gmail.com</p>
                        </div>
                        <div class="contact-item">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M4,3A1,1 0 0,0 3,4A17,17 0 0,0 20,21A1,1 0 0,0 21,20V16.5A1,1 0 0,0 20,15.5C18.75,15.5 17.55,15.3 16.43,14.93C16.08,14.82 15.69,14.9 15.41,15.17L13.21,17.37C10.38,15.93 8.06,13.62 6.62,10.78L8.82,8.57C9.1,8.31 9.18,7.92 9.07,7.57C8.7,6.45 8.5,5.25 8.5,4A1,1 0 0,0 7.5,3H4M19,11V9.5H15.5L21,4L20,3L14.5,8.5V5H13V11H19Z" />
                            </svg>
                            <p>(0034) 633311866</p>
                        </div>
                    </div>
                    @include('front.components.form')
                </div>
            </div>
@endsection