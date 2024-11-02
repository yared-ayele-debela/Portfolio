import axios from 'axios';
import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import './BlogDetail.css';

const BlogDetail = () => {
  const { id } = useParams();
  const [blog, setBlog] = useState(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchBlogDetail = async () => {
      // Check localStorage for cached blog detail
      const cachedBlog = localStorage.getItem(`blog_${id}`);
      if (cachedBlog) {
        setBlog(JSON.parse(cachedBlog));
        setLoading(false);
        return;
      }

      try {
        const response = await axios.get(`https://laravel-api.yaredayele.com/api/blog_detail/${id}`);
        setBlog(response.data);

        // Store the fetched blog detail in localStorage
        localStorage.setItem(`blog_${id}`, JSON.stringify(response.data));
      } catch (err) {
        console.error('Error fetching blog details:', err);
        setError('Could not fetch blog details. Please try again later.');
      } finally {
        setLoading(false);
      }
    };

    fetchBlogDetail();
  }, [id]);

  if (loading) {
    return <div>Loading blog details...</div>;
  }

  if (error) {
    return <div>{error}</div>;
  }

  return (
    <section className='portfolio'>
      <section className='blogs'>
        <br />
        <h2>Blog Detail :</h2>
        <br />
        <div className="card">
          <img src={`https://laravel-api.yaredayele.com/storage/blogs/${blog.image}`} alt={blog.title} className="card-image" />
          <div className="card-content">
            <h2 className="card-title">{blog.title}</h2>
            <br />
            <div
              className="card-description"
              dangerouslySetInnerHTML={{ __html: blog.description }}
            />
            <br />
            <p>Date: {new Date(blog.created_at).toLocaleDateString()}</p>
          </div>
        </div>
      </section>
    </section>
  );
};

export default BlogDetail;
