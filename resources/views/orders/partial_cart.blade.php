<table class="table">

    <?php $total = 0; ?>
    @foreach($cart as $key => $rule)
    <tr>
        <td>{{ $rule->product->title }}</td>
        <td>{{ $rule->type->title }}
            @if($rule->size)
            {{ $rule->size->title }}
            @endif
        </td>
        <td class="text-right">&euro;{{ $rule->product->original_price }}</td>
        @if($remove)
        <td class="text-right"><a href="{{ route('cart.remove', $key) }}">X</a></td>
        @endif
        <?php $total += $rule->product->price; ?>

    </tr>
    <tr>
        <?php $discountPrice =  $rule->product->original_price - $rule->product->price; ?>
        <td>Korting</td>
        <td class="discount"> - {{ $rule->product->discount }} %</td>
        <td class="text-right">- &euro;{{ number_format($discountPrice, 2) }}</td>
    </tr>
    @endforeach
    <tr>
        <td colspan="2"><strong>Totaal</strong></td>
        <td class="text-right"><strong>&euro;{{ number_format($total, 2) }}</strong></td>
        @if($remove)
        <td></td>
        @endif
    </tr>
</table>
