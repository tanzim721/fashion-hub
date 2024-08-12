import React, { useState } from "react";
import ReactDOM from "react-dom";

export default function Counter() {
    // Set the initial count state to zero, 0
    const [count, setCount] = useState(0);

    // Create handleIncrement event handler
    const handleIncrement = () => {
        setCount((prevCount) => prevCount + 1);
    };

    // Create handleDecrement event handler
    const handleDecrement = () => {
        setCount((prevCount) => (prevCount > 0 ? prevCount - 1 : prevCount));
    };
    return (
        <div>
            <header class="header">
                <div class="brand">FashionHub</div>
                <div class="cart-icon">
                    <i className="fas fa-bag-shopping"></i>
                    <div class="notification">{count}</div>
                </div>
            </header>
            <div className="container mt-3">
                <div className="row">
                    <div className="col-md-6">
                        <div id="carouselExample" className="carousel slide pe-5" data-bs-ride="carousel">
                            <div className="carousel-inner">
                                <div className="carousel-item active">
                                    <img  src="https://via.placeholder.com/600x800" className="d-block w-100" alt="Product Image 1" />
                                </div>
                                <div className="carousel-item">
                                    <img src="https://via.placeholder.com/600x800" className="d-block w-100" alt="Product Image 2" />
                                </div>
                                <div className="carousel-item">
                                    <img src="https://via.placeholder.com/600x800" className="d-block w-100" alt="Product Image 3" />
                                </div>
                                <div className="carousel-item">
                                    <img src="https://via.placeholder.com/600x800" className="d-block w-100" alt="Product Image 4" />
                                </div>
                            </div>
                            <div className="carousel-thumbnails-container text-center pt-2">
                                <button className="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span
                                        className="carousel-control-prev-icon"
                                        aria-hidden="true" ></span>
                                    <span className="visually-hidden">
                                        Previous
                                    </span>
                                </button>

                                <div className="carousel-thumbnails d-flex justify-content-center mt-2">
                                    <img src="https://via.placeholder.com/80x80" data-bs-target="#carouselExample" data-bs-slide-to="0" className="img-thumbnail me-1 active" alt="Thumbnail 1" />
                                    <img src="https://via.placeholder.com/80x80" data-bs-target="#carouselExample" data-bs-slide-to="1" className="img-thumbnail me-1" alt="Thumbnail 2" />
                                    <img src="https://via.placeholder.com/80x80" data-bs-target="#carouselExample" data-bs-slide-to="2" className="img-thumbnail me-1" alt="Thumbnail 3" />
                                    <img src="https://via.placeholder.com/80x80" data-bs-target="#carouselExample" data-bs-slide-to="3" className="img-thumbnail me-1" alt="Thumbnail 4" />
                                </div>

                                <button
                                    className="carousel-control-next"
                                    type="button"
                                    data-bs-target="#carouselExample"
                                    data-bs-slide="next"
                                >
                                    <span
                                        className="carousel-control-next-icon"
                                        aria-hidden="true"
                                    ></span>
                                    <span className="visually-hidden">
                                        Next
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div className="col-md-6">
                        <nav aria-label="breadcrumb">
                            <ol className="breadcrumb">
                                <li className="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li className="breadcrumb-item">
                                    <a href="#">Decoration</a>
                                </li>
                                <li className="breadcrumb-item">
                                    <a href="#">Furniture</a>
                                </li>
                                <li className="breadcrumb-item">
                                    <a href="#">Storages</a>
                                </li>
                                <li className="breadcrumb-item active" aria-current="page">
                                    <strong style={{ paddingTop: "10px" }}>Sideboard</strong>
                                </li>
                            </ol>
                        </nav>
                        <h2>Embrace Sideboard</h2>
                        <p className="text-muted">Teixeira Design Studio</p>
                        <hr />
                        <div className="d-flex justify-content-between align-items-center">
                            <p className="text-muted price">$71.56</p>
                            <p className="reviews">
                                <button
                                    type="button"
                                    className="me-1 btn btn-light"
                                    style={{ borderRadius: "12px" }}
                                >
                                    ★ 4.8
                                </button>
                                <button
                                    type="button"
                                    className="me-1 btn btn-light"
                                    style={{ borderRadius: "12px" }}
                                >
                                    <i className="fa fa-star"></i> 67 Reviews
                                </button>
                                <br />
                                <span className="d-block mt-2">
                                    93% of buyers have recommended this.
                                </span>
                            </p>
                        </div>
                        <hr />
                        <div className="mb-3">
                            <label className="form-label">Choose a Color</label>{" "}
                            <br />
                            <button
                                className="btn btn-outline-secondary me-2 rounded-circle"
                                style={{ backgroundColor: "red" }}
                            ></button>
                            <button
                                className="btn btn-outline-secondary me-2 rounded-circle"
                                style={{ backgroundColor: "blue" }}
                            ></button>
                            <button
                                className="btn btn-outline-secondary me-2 rounded-circle"
                                style={{ backgroundColor: "green" }}
                            ></button>
                            <button
                                className="btn btn-outline-secondary me-2 rounded-circle"
                                style={{ backgroundColor: "yellow" }}
                            ></button>
                        </div>
                        <hr />
                        <div className="mb-3">
                            <label className="form-label">Choose a Size</label>
                            <div>
                                <button className="btn btn-outline-secondary btn-sm me-1">
                                    Small
                                </button>
                                <button className="btn btn-outline-secondary btn-sm me-1">
                                    Medium
                                </button>
                                <button className="btn btn-outline-secondary btn-sm me-1">
                                    Large
                                </button>
                                <button className="btn btn-outline-secondary btn-sm me-1">
                                    Extra Large
                                </button>
                                <button className="btn btn-outline-secondary btn-sm me-1">
                                    XXL
                                </button>
                            </div>
                        </div>
                        <hr />
                        <div className="mb-4">
                            <div className="row align-items-center">
                                <div className="col-6 col-sm-5">
                                    <div className="input-group">
                                        <button className="btn btn-outline-secondary" onClick={handleDecrement} disabled={count === 0} >
                                            -
                                        </button>
                                        <span className="btn btn-outline-secondary">
                                            {count}
                                        </span>
                                        <button className="btn btn-outline-secondary" onClick={handleIncrement}>
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div className="col-6 col-sm-7">
                                    <button className="btn btn-primary w-100">
                                        ${count * 71.56} Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

if (document.getElementById("counter")) {
    ReactDOM.render(<Counter />, document.getElementById("counter"));
}

if (document.getElementById("counter")) {
    ReactDOM.render(<Counter />, document.getElementById("counter"));
}
