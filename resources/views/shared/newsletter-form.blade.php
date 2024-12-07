@auth
    <form action="{{ route('newsletter-subscriptions.store') }}" method="POST" class="row row-cols-lg-auto g-3 justify-content-center">
        @csrf

        <div class="col-12">
            <input
                type="email"
                name="email"
                class="form-control me-sm-1 mb-1"
                placeholder="@lang('newsletter.placeholder')"
            >
        </div>
    </form>
@endauth
