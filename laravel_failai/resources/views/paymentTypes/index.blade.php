<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <x-card class="p-2 max-w-xl mx-auto mt-24">
        {{--    <div class="row">--}}
        {{--        <div class="col s12">--}}
        <hr>
        <p class="text-center text-xxl-center">PaymentTypes</p><br>
        <hr>
        <a
            href="{{route('paymentTypes.create')}}"
            class="absolute top-3/3 right-10 bg-black text-white
                  py-2 px-5">
            Kurti nauja
        </a>
        <table class="table-auto">
            <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Paymento pavadinimas</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($paymentTypes as $paymentType)

                <tr>
                    <td><h3 class="text-2xl">
                            {{$paymentType->id}}
                        </h3></td>
                    <td><img class="hidden w-48 mr-6 md:block"
                             src="https://picsum.photos/50"
                             alt="image"/></td>
                    <td><h3 class="text-2xl">
                            <a href="/paymentTypes/{{$paymentType->id}}">
                                {{$paymentType->name}}</a>
                        </h3>
                    </td>

                    <td class="text-right">
                        <div class="card-action">
                            <x-forms.buttons.action :model="$paymentType" mainRoute="paymentTypes" :showBack="false" />
                        </div>
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>
    </x-card>
    <div class="mt-6 p-4" >
        {{$paymentsTypes->links()}}
    </div>
</x-layout>
