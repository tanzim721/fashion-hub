import React, { useState } from "react";
import ReactDOM from 'react-dom';

export default function Counter() {
  // Set the initial count state to zero, 0
  const [count, setCount] = useState(0);

  // Create handleIncrement event handler
  const handleIncrement = () => {
    setCount(prevCount => prevCount + 1);
  };

  // Create handleDecrement event handler
  const handleDecrement = () => {
    setCount(prevCount => prevCount - 1);
  };
  return (
    <div>
        <div className="row">
            <div className="col">
                <img src="https://via.placeholder.com/500" className="img-fluid border-spacing-1" alt="Product" />
                <div className="d-flex mt-3">
                    <img src="https://via.placeholder.com/80" className="img-thumbnail me-2" alt="Thumbnail 1" />
                    <img src="https://via.placeholder.com/80" className="img-thumbnail me-2" alt="Thumbnail 2" />
                    <img src="https://via.placeholder.com/80" className="img-thumbnail me-2" alt="Thumbnail 3" />
                    <img src="https://via.placeholder.com/80" className="img-thumbnail me-2" alt="Thumbnail 4" />
                </div>
            </div>
            <div className="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Decoration</a></li>
                        <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sideboard</li>
                    </ol>
                </nav>
                <h2>Embrace Sideboard</h2>
                <p class="text-muted">Teixeira Design Studio</p>
                <div className="row">
                    <div className="col-2"><p class="text-muted price">$71.56</p></div>
                    <div className="col-10">
                        <p class="reviews">
                            <span style={{ paddingBottom: "5px" }}><button type="button" className="me-1" style={{ backgroundColor: "#ffffff", borderRadius: "12px" }}>★ 4.8</button> <button type="button" className="me-1" style={{ backgroundColor: "#ffffff", borderRadius: "12px" }}> <i className="fa fa-star"></i> 67 Reviews</button></span><br />
                            <span>93% of buyers found this recommended.</span>
                        </p>
                    </div>
                </div>
                <p><strong>93%</strong> of buyers have recommended this.</p>
                <div className="mb-3">
                    <label htmlFor="" className="form-label">Choose a Color</label>
                    <button class="btn btn-outline-secondary me-2 rounded-circle" style={{ backgroundColor: "red" }}></button>
                    <button class="btn btn-outline-secondary me-2 rounded-circle" style={{ backgroundColor: "red" }}></button>
                    <button class="btn btn-outline-secondary me-2 rounded-circle" style={{ backgroundColor: "red" }}></button>
                    <button class="btn btn-outline-secondary me-2 rounded-circle" style={{ backgroundColor: "red" }}></button>
                </div>
                <div class="mb-3">
                    <label class="form-label">Choose a Size</label>
                    <div>
                        <button class="btn btn-outline-secondary btn-sm me-2">Small</button>
                        <button class="btn btn-outline-secondary btn-sm me-2">Medium</button>
                        <button class="btn btn-outline-secondary btn-sm me-2">Large</button>
                        <button class="btn btn-outline-secondary btn-sm me-2">Extra Large</button>
                        <button class="btn btn-outline-secondary btn-sm me-2">XXL</button>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">Quantity</label>
                    <div class="input-group">
                        <button class="btn btn-outline-secondary" onClick={handleDecrement}>-</button>
                        <span class="btn btn-outline-secondary"> {count} </span>
                        <button class="btn btn-outline-secondary" onClick={handleIncrement}>+</button>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg w-100">${count * 71.56} Add To Cart</button>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab">Description</button>
                    </li>
                </ul>
                <div class="tab-content p-3" id="myTabContent">
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

if (document.getElementById('counter')) {
    ReactDOM.render(<Counter />, document.getElementById('counter'));
}

if (document.getElementById('counter')) {
    ReactDOM.render(<Counter />, document.getElementById('counter'));
}
