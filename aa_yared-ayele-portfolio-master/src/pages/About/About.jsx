/* eslint-disable react/no-unescaped-entities */

import { useEffect, useState } from "react"
import Testimonial from "./Testimonial";
import Service from "./Service";
import axios from "axios";

const servicesData = [
  {
    icon: "/images/icon-design.svg",
    title: "Web Design",
    description: "Creating modern, responsive, and user-centric designs using Bootstrap and other front-end technologies."
  },
  {
    icon: "/images/icon-dev.svg",
    title: "Web Development",
    description: "Full-stack development with PHP, Laravel, jQuery, and MERN stack for high-quality, scalable web applications."
  },
  {
    icon: "/images/developing.png",
    title: "Backend Development",
    description: "Building robust backend solutions with PHP, Laravel, and Node.js for seamless API integration and efficient data management."
  },
  {
    icon: "/images/full-stack.png",
    title: "Full-Stack Development",
    description: "Developing complete web solutions, from front-end interfaces to back-end systems, using technologies like PHP, Laravel, and the MERN stack."
  }
];



const About = () => {

  const [user, setUser] = useState([]);
  const [services, setService] = useState([]);

  useEffect(() => {
    axios.get('https://laravel-api.yaredayele.com/api/resume')
      .then(response => setUser(response.data))
      .catch(error => console.error('Error fetching user:', error));
    axios.get('https://laravel-api.yaredayele.com/api/service')
      .then(response => setService(response.data))
      .catch(error => console.error('Error fetching user:', error));
  });

  return (
    <article className="about  active" data-page="about">

      <header>
        <h2 className="h2 article-title">About me</h2>
      </header>

      <section className="about-text">
        <p>
          {user.about_me}
        </p>
      </section>

      <section className="service">

        <h3 className="h3 service-title">What i'm doing</h3>

        <ul className="service-list">
          {services.map((service, index) => (
            <Service
              key={service.id}
              icon=  {`https://laravel-api.yaredayele.com/storage/category/${service.cover_image}`}
              title={service.name}
              description={service.description}
            />
          ))}

        </ul>

      </section>
    </article>
  )
}

export default About