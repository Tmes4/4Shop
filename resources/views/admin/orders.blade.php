@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center my-4">
    <h4>Bestellingen</h4>
    <div>
        <a href="{{ route('admin.orders.factory') }}" target="_blank">Bekijk overzicht voor producent &gt;</a><br />
        <a href="{{ route('admin.orders.mail') }}">Verstuur mails over ophalen &gt;</a><br />
        <a href="{{ route('admin.orders.packing') }}" target="_blank">Print pakbonnen &gt;</a>
    </div>
    
</div>

<table class="table table-striped table-hover">
    <tr>
        <th>#</th>
        <th>Naam</th>
        <th>Speltak</th>
        <th>Bedrag</th>
        <th>Betaling</th>
        <th>Levering</th>
    </tr>
    @foreach($orders as $order)
    <tr>
        <td>
            <a href="{{ route('admin.orders.show', $order->id) }}">{{ $order->slug }}</a>
        </td>
        <td>{{ $order->name }}</td>
        <td>{{ ucfirst($order->speltak) }}</td>
        <td>&euro;{{ number_format($order->amount, 2) }}</td>
        <td>
            {!! $order->payed ? '<span class="badge badge-success">Betaald</span>' : '<span class="badge badge-warning">Niet betaald</span>' !!}
        </td>
        <td>
            @if ($order->delivered)
            <a href="{{ route('admin.orders.toggle', $order->id) }}" class="badge badge-success">Geleverd</a>
            @else
            <a href="{{ route('admin.orders.toggle', $order->id) }}" class="badge badge-warning">Niet geleverd</a>
            @endif
        </td>
    </tr>
    @endforeach
</table>
@endsection
