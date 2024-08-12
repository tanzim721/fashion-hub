
import React, { useState } from "react";
import ReactDOM from 'react-dom';

export default function Description() {

  return (
    <div>
        <div class="row mt-5">
            <div class="col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab">Description</button>
                    </li>
                </ul>
                <div class="tab-content p-3 product-section" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <h4>Product Description</h4>
                        <p>When it’s colder than the far side of the moon and spitting rain too, you’ve still got to look good. From water-repellent leather to a rugged outsole, the Lunar Force 1 adapts AF-1 style, so you can keep your flame burning when the weather hits. Metal lace hardware and extended tongue bring mountain boot toughness, while the star-studded toe design gives your look the edge.</p>

                        <h4>Benefits</h4>
                        <ul>
                            <li>Durable leather is easily cleanable so you can keep your look fresh.</li>
                            <li>Water-repellent finish and internal membrane help keep your feet dry.</li>
                            <li>Toe piece with star pattern adds durability.</li>
                            <li>Synthetic insulation helps keep you warm.</li>
                            <li>Originally designed for performance hoops, the Air unit delivers lightweight cushioning.</li>
                            <li>Plush tongue wraps over the ankle to help keep out the moisture and cold.</li>
                            <li>Rubber outsole with aggressive traction pattern adds durable grip.</li>
                        </ul>

                        <h4>Product Details</h4>
                        <ul>
                            <li>Not intended for use as Personal Protective Equipment (PPE).</li>
                            <li>Water-repellent finish and internal membrane help keep your feet dry.</li>
                        </ul>

                        <h4>More Details</h4>
                        <ul>
                            <li>Lunarlon midsole delivers ultra-plush responsiveness</li>
                            <li>Encapsulated Air-Sole heel unit for lightweight cushioning</li>
                            <li>Colour Shown: Ale Brown/Black/Goldtone/Ale Brown</li>
                            <li>Style: 805899-202</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
  );
}

if (document.getElementById('description')) {
    ReactDOM.render(<Description />, document.getElementById('description'));
}

if (document.getElementById('description')) {
    ReactDOM.render(<Description />, document.getElementById('description'));
}

