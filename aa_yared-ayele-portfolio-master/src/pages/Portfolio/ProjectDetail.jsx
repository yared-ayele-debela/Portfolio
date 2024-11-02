import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import axios from 'axios';
import './ProjectDetail.css';

const ProjectDetail = () => {
  const { id } = useParams();
  const [project, setProject] = useState(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchProjectDetail = async () => {
      // Check localStorage for cached project data
      const cachedProject = localStorage.getItem(`project-${id}`);
      if (cachedProject) {
        setProject(JSON.parse(cachedProject));
        setLoading(false); // No need to fetch again, just set loading to false
        return;
      }

      try {
        const response = await axios.get(`https://laravel-api.yaredayele.com/api/project/detail/${id}`);
        setProject(response.data);

        // Store the fetched project data in localStorage
        localStorage.setItem(`project-${id}`, JSON.stringify(response.data));
      } catch (err) {
        console.error('Error fetching project details:', err);
        setError('Could not fetch project details. Please try again later.');
      } finally {
        setLoading(false);
      }
    };

    fetchProjectDetail();
  }, [id]);

  if (loading) {
    return <div>Loading project details...</div>;
  }

  if (error) {
    return <div>{error}</div>;
  }

  return (
    <section className='portfolio'>
      <header>
        <h2>Project Detail: {project.title}</h2>
      </header>
      <section className='projects'>
        <div className="card">
          <img
            src={`https://laravel-api.yaredayele.com/storage/projects/${project.cover_image}`}
            alt={project.title}
            className="card-image"
          />
          <div className="card-content">
            <h2 className="card-title">{project.title}</h2>
            <br />
            <p><strong>Category:</strong> {project.category}</p>
            <div
              className="card-description"
              dangerouslySetInnerHTML={{ __html: project.description }}
            />
            <br />
            <p><strong>Start Date:</strong> {project.start_date}</p>
            <p><strong>End Date:</strong> {project.end_date}</p>
          </div>
        </div>
        <h3 className='card-title title'>Project Images</h3>
        <div className="image-gallery">
          {project.images.map((image, index) => (
            <img
              src={`https://laravel-api.yaredayele.com/storage/projects/${image.images}`}
              alt={project.title}
              className="card-image"
              key={index}
            />
          ))}
        </div>
      </section>
    </section>
  );
};

export default ProjectDetail;
