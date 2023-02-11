<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <x-card class="p-2 max-w-xl mx-auto mt-24">
        {{--    <div class="row">--}}
        {{--        <div class="col s12">--}}
        <hr>
        <p class="text-center text-xxl-center"> Payments</p><br>
        <hr>
        <a
            href="{{route('payments.create')}}"
            class="absolute top-3/3 right-10 bg-black text-white
                  py-2 px-5">
            Kurti nauja Paymenta
        </a>
        <table class="table-auto">
            <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Order_id</th>
                <th>Payment_type_id</th>
                <th>quantity</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($payments as $payment)

                <tr>
                    <td><h3 class="text-2xl">
                            {{$payment->id}}
                        </h3></td>
                    <td><img class="hidden w-48 mr-6 md:block"
                             src="https://picsum.photos/50"
                             alt="image"/></td>
                    <td><h3 class="text-2xl">
                            <a href="/payments/{{$payment->id}}">
                                {{$payment->order_id}}</a>
                        </h3>
                    </td>
                    <td class="text-center">
                        <div class="text-xl font-bold mb-4">
                            {{$payment->payment_type_id}}
                        </div>
                    </td>
                    <td><h3 class="text-2xl">
                            {{$payment->amount}}
                        </h3></td>

                    <td class="text-right">
                        <div class="card-action">
                            <x-forms.buttons.action :model="$payment" mainRoute="payments" :showBack="false" />
                        </div>
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>
    </x-card>
    <div class="mt-6 p-4" >
        {{$payments->links()}}
    </div>
</x-layout>
