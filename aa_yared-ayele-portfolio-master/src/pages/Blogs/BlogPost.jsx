import { Link } from "react-router-dom";

const BlogPost = ({ title,id, date, image, description }) => {
  return (
    <li className="blog-post-item">
     <Link to={`/blog/${id}`}>
        <figure className="blog-banner-box">
          <img src={image} alt={title} loading="lazy"/>
        </figure>
        <div className="blog-content">
          <div className="blog-meta">
            <time dateTime={date}>{date}</time>
          </div>
          <h3 className="h3 blog-item-title">{title}</h3>
          <p className="blog-text">{description}</p>
        </div>
      </Link>
    </li>
  );
}

export default BlogPost;
