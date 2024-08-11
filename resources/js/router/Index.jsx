import React from "react";
import { Routes, Route} from "react-router-dom";

import Home from "../components/HomePage.jsx";
import About from "../components/AboutPage.jsx";
import NotFound from "../components/NotFoundPage.jsx";


const Index = () => {
    return (
        <div>
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/about" element={<About />} />
                <Route path="/*" element={<NotFound />} />
            </Routes>
        </div>
    )
}

export default Index
