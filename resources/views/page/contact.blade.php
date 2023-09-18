@extends('layout.main')
@section('conn')
    <section class="contact_section  long_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        <div class="heading_container">
                            <h2>
                                Contact Us
                            </h2>
                        </div>
                        @include('forms.contactsForm')

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
