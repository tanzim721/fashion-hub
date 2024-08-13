
        <div class="input-group">
            <button type="button" class="btn btn-outline-secondary" wire:click="decrement" @if($quantity <= 1) disabled @endif>
                -
            </button>
            <span class="btn btn-outline-secondary">{{ $quantity }}</span>
            <input type="hidden" id="quantity_input" name="quantity" value="{{ $quantity }}">
            <button type="button" class="btn btn-outline-secondary" wire:click="increment">
                +
            </button>
        </div>
