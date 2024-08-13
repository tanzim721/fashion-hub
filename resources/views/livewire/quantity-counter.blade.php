<div class="row align-items-center">
    <div class="col-6 col-sm-5">
        <div class="input-group">
            <button type="button" class="btn btn-outline-secondary" wire:click="decrement"
                @if ($quantity <= 1) disabled @endif>
                -
            </button>
            <span class="btn btn-outline-secondary">{{ $quantity }}</span>
            <input type="hidden" id="quantity_input" name="quantity" value="{{ $quantity }}">
            <button type="button" class="btn btn-outline-secondary" wire:click="increment">
                +
            </button>
        </div>
    </div>
    <div class="col-6 col-sm-7">
        <button type="submit" class="btn btn-primary w-100">
            ${{ $price * $quantity + ($price * 0.25 * $quantity) }} Add To Cart
        </button>
    </div>

</div>
